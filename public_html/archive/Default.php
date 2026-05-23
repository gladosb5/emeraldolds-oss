<?php
// Local file browser with server selection for /archive/uploads
// Bootstrap your site
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsitesBuild/navbar.php";

// Authentication check
$id = isset($_GET['ID']) ? (int)$_GET['ID'] : 0;
if ($id < 1 && ($logged ?? "no") === "no") {
    header("Location: /Login/Default.aspx");
    exit;
}

// Get server choice
$server = isset($_GET['server']) ? $_GET['server'] : '';

// If no server is selected, show server chooser
if (empty($server)) {
    ?>
    <body>
    <?php                                                         // 2️⃣ NAVBAR
require_once $_SERVER['DOCUMENT_ROOT'].'/api/WebsiteBuild/navbar.php';
?>
    <title>Choose Server - The Emerald Archive</title>
    </head>
    <h1>the emerald archive</h1>
    <h2>select server (each server holds different files.)</h2>
    <div style="margin: 20px 0;">
        <div style="border: 1px solid #ccc; padding: 20px; margin: 10px 0; border-radius: 5px; background-color: #50C878;">
            <h3>server 1</h3>
            <p>server 1, local files</p>
            <a href="?server=local&ID=<?php echo $id; ?>" style="background: #007cba; color: white; padding: 10px 20px; text-decoration: none; border-radius: 3px;">
                select server 1
            </a>
        </div>
        
        <div style="border: 1px solid #ccc; padding: 20px; margin: 10px 0; border-radius: 5px; background-color: #50C878;">
            <h3>server 2</h3>
            <p>server 2, remote files</p>
            <a href="?server=remote&ID=<?php echo $id; ?>" style="background: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 3px;">
                select server 2
            </a>
        </div>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
    </body>
    </html>
    <?php
    exit;
}

// Get the subdirectory from URL parameter
$subdir = isset($_GET['subdir']) ? trim($_GET['subdir'], '/') . '/' : '';

// Initialize variables
$items = [];
$serverName = '';
$currentPath = '';

// Handle different servers
if ($server === 'local') {
    $serverName = 'Server 1 (Local)';
    
    // Base local path
    $basePath = $_SERVER["DOCUMENT_ROOT"] . '/archive/uploads/';
    $currentPath = $basePath . $subdir;
    
    // Security check - ensure we stay within the uploads directory
    $realBasePath = realpath($basePath);
    $realCurrentPath = realpath($currentPath);
    if (!$realCurrentPath || strpos($realCurrentPath, $realBasePath) !== 0) {
        die('Access denied: Invalid path');
    }
    
    // Get files and folders from local directory
    if (is_dir($currentPath)) {
        $files = scandir($currentPath);
        foreach ($files as $file) {
            if ($file === '.' || $file === '..') continue;
            
            $fullPath = $currentPath . $file;
            $isFolder = is_dir($fullPath);
            
            $items[] = [
                'name' => $file,
                'is_folder' => $isFolder,
                'size' => $isFolder ? null : filesize($fullPath),
                'modified' => filemtime($fullPath)
            ];
        }
    }
    
} else if ($server === 'remote') {
    $serverName = 'Server 2 (Remote)';
    
    // Remote server implementation
    $remoteBase = 'http://gladosb5.heliohost.us/archive/uploads/' . $subdir;
    
    // Initialize cURL to fetch remote directory listing
    $ch = curl_init($remoteBase);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_USERAGENT      => 'EmeraldNewsBot/1.0',
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_CONNECTTIMEOUT => 10,
    ]);
    
    $html = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if (curl_errno($ch)) {
        $error = 'Error fetching remote directory: ' . curl_error($ch);
        curl_close($ch);
        // Add error item to display
        $items[] = [
            'name' => $error,
            'is_folder' => false,
            'size' => null,
            'modified' => time()
        ];
    } else if ($httpCode !== 200) {
        curl_close($ch);
        $items[] = [
            'name' => 'Remote server returned HTTP ' . $httpCode,
            'is_folder' => false,
            'size' => null,
            'modified' => time()
        ];
    } else {
        curl_close($ch);
        
        // Parse HTML to extract file listings
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTML($html);
        libxml_clear_errors();
        
        $anchors = $dom->getElementsByTagName('a');
        
        foreach ($anchors as $anchor) {
            $href = $anchor->getAttribute('href');
            $text = trim($anchor->textContent);
            
            // Skip navigation links and empty entries
            if (
                $href === '../' ||
                $href === './' ||
                $href === '' ||
                $href[0] === '?' ||
                strcasecmp($text, 'Parent Directory') === 0 ||
                empty($text)
            ) {
                continue;
            }
            
            // Determine if it's a folder (ends with /)
            $isFolder = substr($href, -1) === '/';
            $displayName = $isFolder ? rtrim($text, '/') : $text;
            
            // Try to extract file size and date from the HTML if available
            $size = null;
            $modified = time(); // Default to current time
            
            // Look for size information in the parent row
            $parentNode = $anchor->parentNode;
            if ($parentNode && $parentNode->parentNode) {
                $rowText = $parentNode->parentNode->textContent;
                // Try to extract size information (this is basic parsing)
                if (preg_match('/(\d+(?:\.\d+)?)\s*(B|K|M|G)/i', $rowText, $matches)) {
                    $sizeValue = floatval($matches[1]);
                    $unit = strtoupper($matches[2]);
                    switch ($unit) {
                        case 'K': $size = $sizeValue * 1024; break;
                        case 'M': $size = $sizeValue * 1024 * 1024; break;
                        case 'G': $size = $sizeValue * 1024 * 1024 * 1024; break;
                        default: $size = $sizeValue; break;
                    }
                }
                
                // Try to extract date information
                if (preg_match('/(\d{4}-\d{2}-\d{2}\s+\d{2}:\d{2})/', $rowText, $dateMatches)) {
                    $modified = strtotime($dateMatches[1]);
                }
            }
            
            $items[] = [
                'name' => $displayName,
                'is_folder' => $isFolder,
                'size' => $isFolder ? null : $size,
                'modified' => $modified,
                'href' => $href
            ];
        }
    }
}

// Sort items: folders first, then files, alphabetically
if (!empty($items)) {
    usort($items, function($a, $b) {
        if ($a['is_folder'] !== $b['is_folder']) {
            return $b['is_folder'] - $a['is_folder']; // folders first
        }
        return strcasecmp($a['name'], $b['name']); // alphabetical
    });
}

// Build breadcrumb trail
$crumbs = [];
if ($subdir !== '') {
    $parts = explode('/', trim($subdir, '/'));
    $acc = '';
    foreach ($parts as $part) {
        $acc .= ($acc === '' ? '' : '/') . $part;
        $crumbs[] = [
            'name' => $part,
            'link' => "?server=" . urlencode($server) . "&subdir=" . urlencode($acc . '/') . "&ID=" . $id
        ];
    }
}

// Helper function to format file size
function formatFileSize($bytes) {
    if ($bytes === null) return '';
    $units = ['B', 'KB', 'MB', 'GB'];
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    $bytes /= (1 << (10 * $pow));
    return round($bytes, 2) . ' ' . $units[$pow];
}
?>
<body>
<title>Browse: /<?php echo htmlspecialchars($subdir); ?> - <?php echo $serverName; ?></title>
</head>
<h1 style="color: #50C878;">the emerald archive</h1>

<div style="margin: 10px 0; padding: 10px; background: #50C878; border-radius: 3px;" color: #50C878;>
    <strong>Current Server:</strong> <?php echo htmlspecialchars($serverName); ?>
    | <a href="?ID=<?php echo $id; ?>"><p style="color: black;">Change Server</p></a>
</div>

<div style="margin: 10px 0; padding: 10px; background: darkblue; border-radius: 3px;">
    <strong style="color: #50C878;">Browsing:</strong> <p style="color: grey;">/archive/uploads/<?php echo htmlspecialchars($subdir); ?>
</div>

<p style="margin: 10px 0; color: #50C878;">
    <a href="?server=<?php echo urlencode($server); ?>&ID=<?php echo $id; ?>" style="color: #50C878;">🏠 Home</a>
    <?php foreach ($crumbs as $crumb): ?>
        &raquo; <a href="<?php echo $crumb['link']; ?>"><?php echo htmlspecialchars($crumb['name']); ?></a>
    <?php endforeach; ?>
</p>

<?php if ($server === 'local' && !is_dir($currentPath)): ?>
    <p style="color: red;"><em>Directory not found or inaccessible.</em></p>
<?php elseif (empty($items)): ?>
    <p><em>This folder is empty or no files found.</em></p>
<?php else: ?>
    <div style="display: flex; flex-wrap: wrap; gap: 16px; margin-top: 15px; justify-content: center;">
        <?php if ($subdir !== ''): ?>
            <?php $parentDir = dirname(trim($subdir, '/')) . '/'; ?>
            <a href="?server=<?php echo urlencode($server); ?>&subdir=<?php echo urlencode($parentDir === './' ? '' : $parentDir); ?>&ID=<?php echo $id; ?>"
               style="display: block; width: 220px; border: 1px solid #ddd; border-radius: 8px; background: #fff; text-decoration: none; color: black; padding: 12px;">
                <div style="height: 140px; border-radius: 6px; background: #f1f1f1; display: flex; align-items: center; justify-content: center; color: black; font-size: 48px;">⬆️</div>
                <p style="margin: 10px 0 4px; color: black; font-weight: bold;">Parent Directory</p>
                <p style="margin: 0; color: #333; font-size: 13px;">Go up one folder</p>
            </a>
        <?php endif; ?>

        <?php foreach ($items as $item): ?>
            <?php
                $extension = strtolower(pathinfo($item['name'], PATHINFO_EXTENSION));
                $isCsv = $extension === 'csv';
                $isImage = in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp', 'bmp']);
                $isVideo = in_array($extension, ['mp4', 'webm', 'ogg', 'mov']);
                $itemLink = '';
                $openInNewTab = false;
                $previewSrc = '';

                if ($item['is_folder']) {
                    $itemLink = '?server=' . urlencode($server) . '&subdir=' . urlencode($subdir . $item['name'] . '/') . '&ID=' . $id;
                } else if ($isCsv) {
                    $itemLink = '/archive/csv_viewer.php?server=' . urlencode($server) . '&subdir=' . rawurlencode($subdir) . '&file=' . rawurlencode($item['name']);
                    if ($id > 0) {
                        $itemLink .= '&ID=' . $id;
                    }
                } else if ($server === 'local') {
                    $itemLink = '/archive/uploads/' . $subdir . rawurlencode($item['name']);
                    $openInNewTab = true;
                } else {
                    $itemLink = 'http://gladosb5.heliohost.us/archive/uploads/' . $subdir . $item['href'];
                    $itemLink = preg_replace('/^https:\/\//i', 'http://', $itemLink);
                    $openInNewTab = true;
                }

                if (!$item['is_folder'] && ($isImage || $isVideo)) {
                    if ($server === 'local') {
                        $previewSrc = '/archive/uploads/' . $subdir . rawurlencode($item['name']);
                    } else {
                        $previewSrc = 'http://gladosb5.heliohost.us/archive/uploads/' . $subdir . $item['href'];
                        $previewSrc = preg_replace('/^https:\/\//i', 'http://', $previewSrc);
                    }
                }
            ?>

            <a href="<?php echo $itemLink; ?>"
               <?php if ($openInNewTab): ?>target="_blank"<?php endif; ?>
               style="display: block; width: 220px; border: 1px solid #ddd; border-radius: 8px; background: #fff; text-decoration: none; color: black; padding: 12px;">
                <div style="height: 140px; border-radius: 6px; background: #f1f1f1; display: flex; align-items: center; justify-content: center; overflow: hidden; color: black;">
                    <?php if ($isImage && !$item['is_folder']): ?>
                        <img src="<?php echo $previewSrc; ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" style="width: 100%; height: 100%; object-fit: cover;" />
                    <?php elseif ($isVideo && !$item['is_folder']): ?>
                        <video src="<?php echo $previewSrc; ?>" style="width: 100%; height: 100%; object-fit: cover;" muted preload="metadata"></video>
                    <?php else: ?>
                        <span style="font-size: 48px;"><?php echo $item['is_folder'] ? '📁' : '📄'; ?></span>
                    <?php endif; ?>
                </div>
                <p style="margin: 10px 0 4px; color: black; font-weight: bold; word-break: break-word;"><?php echo htmlspecialchars($item['name']); ?></p>
                <p style="margin: 0; color: #333; font-size: 13px;">
                    <?php echo $item['is_folder'] ? 'Folder' : 'File'; ?>
                    • <?php echo $item['modified'] ? date('Y-m-d H:i', $item['modified']) : '-'; ?>
                    <?php if (!$item['is_folder']): ?>
                        • <?php echo formatFileSize($item['size']) && $item['size'] > 0 ? formatFileSize($item['size']) : '?'; ?>
                    <?php endif; ?>
                </p>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<div style="margin-top: 30px; padding: 15px; background: #f8f9fa; border-radius: 5px; font-size: 14px; color: #6c757d;">
    <strong>Directory Stats:</strong> 
    <?php if ($server === 'local' && is_dir($currentPath)): ?>
        <?php 
        $folderCount = count(array_filter($items, function($item) { return $item['is_folder']; }));
        $fileCount = count($items) - $folderCount;
        ?>
        <?php echo $folderCount; ?> folder(s), <?php echo $fileCount; ?> file(s)
    <?php elseif ($server === 'remote'): ?>
        <?php 
        $folderCount = count(array_filter($items, function($item) { return $item['is_folder']; }));
        $fileCount = count($items) - $folderCount;
        ?>
        Remote server: <?php echo $folderCount; ?> folder(s), <?php echo $fileCount; ?> file(s)
    <?php else: ?>
        Directory not accessible
    <?php endif; ?>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
</body>
</html>
