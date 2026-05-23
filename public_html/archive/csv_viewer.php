<?php
// CSV viewer for Emerald Archive
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$server = isset($_GET['server']) ? strtolower($_GET['server']) : 'local';
$id = isset($_GET['ID']) ? (int)$_GET['ID'] : 0;
$allowedServers = ['local', 'remote'];
if (!in_array($server, $allowedServers, true)) {
    $server = 'local';
}
$rawSubdir = isset($_GET['subdir']) ? $_GET['subdir'] : '';
$rawFile   = isset($_GET['file']) ? $_GET['file'] : '';

$decodedSubdir = trim(rawurldecode($rawSubdir), '/');
$decodedFile = rawurldecode($rawFile);

$subdirParts = [];
$invalidSubdir = false;
if ($decodedSubdir !== '') {
    foreach (explode('/', $decodedSubdir) as $part) {
        if ($part === '' || $part === '.' || $part === '..') {
            $invalidSubdir = true;
            break;
        }
        $subdirParts[] = $part;
    }
}

if ($invalidSubdir) {
    http_response_code(400);
    echo '<body>';
    echo '<div style="padding: 40px; max-width: 800px; margin: 0 auto;">';
    echo '<h1 style="color: #50C878;">invalid folder</h1>';
    echo '<p style="color: black;">The folder specified is not valid.</p>';
    $returnUrl = '/archive/Default.php';
    if ($id > 0) {
        $returnUrl .= '?ID=' . $id;
    }
    echo '<a href="' . htmlspecialchars($returnUrl) . '" style="color: #50C878;">Return to archive</a>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
    exit;
}

$file = $decodedFile;

if ($file === '' || basename($file) !== $file || strtolower(pathinfo($file, PATHINFO_EXTENSION)) !== 'csv') {
    http_response_code(400);
    echo '<body>';
    echo '<div style="padding: 40px; max-width: 800px; margin: 0 auto;">';
    echo '<h1 style="color: #50C878;">invalid file</h1>';
    echo '<p style="color: black;">Only CSV files can be viewed with this page.</p>';
    $returnUrl = '/archive/Default.php';
    if ($id > 0) {
        $returnUrl .= '?ID=' . $id;
    }
    echo '<a href="' . htmlspecialchars($returnUrl) . '" style="color: #50C878;">Return to archive</a>';
    echo '</div>';
    echo '</body>';
    echo '</html>';
    exit;
}

$displaySubdir = empty($subdirParts) ? '' : implode('/', $subdirParts) . '/';

$rows = [];
$error = '';
$downloadUrl = '';

if ($server === 'remote') {
    $remoteUrl = 'http://gladosb5.heliohost.us/archive/uploads/';
    if (!empty($subdirParts)) {
        $remoteUrl .= implode('/', array_map('rawurlencode', $subdirParts)) . '/';
    }
    $remoteUrl .= rawurlencode($file);
    $downloadUrl = $remoteUrl;

    $ch = curl_init($remoteUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_USERAGENT      => 'EmeraldNewsBot/1.0',
        CURLOPT_TIMEOUT        => 30,
        CURLOPT_CONNECTTIMEOUT => 10,
    ]);

    $csvContent = curl_exec($ch);
    if (curl_errno($ch)) {
        $error = 'Unable to load the CSV file: ' . curl_error($ch);
    } else if (curl_getinfo($ch, CURLINFO_HTTP_CODE) !== 200) {
        $error = 'Remote server returned HTTP ' . curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
    curl_close($ch);

    if ($error === '' && $csvContent !== false) {
        $lines = preg_split('/\r\n|\r|\n/', $csvContent);
        foreach ($lines as $line) {
            if ($line === '') {
                continue;
            }
            $rows[] = str_getcsv($line);
        }
    }
} else {
    $downloadUrl = '/archive/uploads/';
    if (!empty($subdirParts)) {
        $downloadUrl .= implode('/', array_map('rawurlencode', $subdirParts)) . '/';
    }
    $downloadUrl .= rawurlencode($file);

    $basePath = realpath($_SERVER['DOCUMENT_ROOT'] . '/archive/uploads');
    if ($basePath === false) {
        $error = 'Archive storage is not available on this server.';
    } else {
        $targetDir = $basePath;
        if (!empty($subdirParts)) {
            $targetDir .= '/' . implode('/', $subdirParts);
        }

        $realTargetDir = realpath($targetDir);
        if ($realTargetDir === false || strpos($realTargetDir, $basePath) !== 0) {
            $error = 'Access denied: Invalid path';
        } else {
            $targetPath = $realTargetDir . '/' . $file;
            if (!is_file($targetPath) || !is_readable($targetPath)) {
                $error = 'Unable to read the requested file.';
            } else if (($handle = fopen($targetPath, 'r')) !== false) {
                while (($data = fgetcsv($handle)) !== false) {
                    $rows[] = $data;
                }
                fclose($handle);
            } else {
                $error = 'Unable to open the file.';
            }
        }
    }
}

$bomPattern = "\xEF\xBB\xBF";
if (!empty($rows) && isset($rows[0][0])) {
    $rows[0][0] = preg_replace('/^' . $bomPattern . '/u', '', $rows[0][0]);
}

$title = 'CSV Viewer - ' . htmlspecialchars($file);
?>
<body>
<title><?php echo $title; ?></title>
</head>
<div style="padding: 40px; max-width: 1100px; margin: 0 auto;">
    <h1 style="color: #50C878;">csv viewer</h1>
    <p style="color: black;">Viewing file: <strong><?php echo htmlspecialchars($displaySubdir . $file); ?></strong></p>
    <p style="color: black;">Server: <strong><?php echo htmlspecialchars($server); ?></strong></p>
    <p><a href="/archive/Default.php?server=<?php echo urlencode($server); ?>&subdir=<?php echo rawurlencode($displaySubdir); ?><?php if ($id > 0) { echo '&ID=' . $id; } ?>" style="color: #50C878;">&larr; back to archive</a></p>
    <?php if ($downloadUrl !== '' && $error === ''): ?>
        <p><a href="<?php echo htmlspecialchars($downloadUrl); ?>" style="display: inline-block; background: #50C878; color: black; padding: 8px 14px; border-radius: 4px; text-decoration: none;">⬇️ download csv</a></p>
    <?php endif; ?>

    <?php if ($error !== ''): ?>
        <div style="padding: 20px; background: #ffdddd; border: 1px solid #ffaaaa; border-radius: 4px; color: black;">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php elseif (empty($rows)): ?>
        <div style="padding: 20px; background: #f8f9fa; border-radius: 4px; color: black;">
            No data found in this CSV file.
        </div>
    <?php else: ?>
        <?php
            $columnCount = 0;
            foreach ($rows as $rowData) {
                $columnCount = max($columnCount, count($rowData));
            }
            if ($columnCount === 0) {
                $columnCount = 1;
            }
            $headerRow = $rows[0];
            $headers = [];
            for ($i = 0; $i < $columnCount; $i++) {
                $value = isset($headerRow[$i]) ? $headerRow[$i] : '';
                $headers[] = ($value === '') ? 'Column ' . ($i + 1) : $value;
            }
        ?>
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <?php foreach ($headers as $header): ?>
                            <th style="padding: 10px; border: 1px solid #ccc; background: #50C878; color: black; text-align: left;">
                                <?php echo htmlspecialchars($header); ?>
                            </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (array_slice($rows, 1) as $row): ?>
                        <tr>
                            <?php for ($i = 0; $i < $columnCount; $i++): ?>
                                <td style="padding: 10px; border: 1px solid #ccc; color: black; background: white;">
                                    <?php echo htmlspecialchars($row[$i] ?? ''); ?>
                                </td>
                            <?php endfor; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
</body>
</html>
