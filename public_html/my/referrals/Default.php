<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include necessary components
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

// Path to the uploads directory
$uploadsDir = $_SERVER["DOCUMENT_ROOT"]."/archive/uploads";

// Function to recursively get files in directories
function getFiles($dir) {
    $files = [];
    $items = array_diff(scandir($dir), array('.', '..'));

    foreach ($items as $item) {
        $path = $dir . '/' . $item;
        if (is_dir($path)) {
            $files[$item] = getFiles($path); // Recursively get files in subdirectories
        } else {
            $files[] = $item;
        }
    }

    return $files;
}

// Get all files and directories in the uploads directory
$filesAndDirs = getFiles($uploadsDir);

// Key generation functionality for administrators
if ($_USER['administrator'] == "yes" && isset($_POST['generateKey'])) {
    $username = $_USER['username']; // Assuming username is stored in the $_USER array
    
    // Check if the user has at least 100 tix
    $ticketCheckQuery = $conn->prepare("SELECT tix FROM users WHERE username = ?");
    if (!$ticketCheckQuery) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }
    $ticketCheckQuery->bind_param("s", $username);
    $ticketCheckQuery->execute();
    $ticketResult = $ticketCheckQuery->get_result();
    
    if ($ticketResult->num_rows == 1) {
        $row = $ticketResult->fetch_assoc();
        $currentTix = $row['tix'];

        if ($currentTix >= 100) {
            // Deduct 100 tix from the user's account
            $updateTixQuery = $conn->prepare("UPDATE users SET tix = tix - 100 WHERE username = ?");
            if (!$updateTixQuery) {
                die("Prepare failed: " . htmlspecialchars($conn->error));
            }
            $updateTixQuery->bind_param("s", $username);

            if ($updateTixQuery->execute()) {
                // Generate a new invite key
                $key = "emeraldnewsKEY_" . generateRandomString(10);

                // Insert the new key into the `gamekeys` table
                $keyQuery = $conn->prepare("INSERT INTO gamekeys (gamekeys, used, creator) VALUES (?, 0, ?)");
                if (!$keyQuery) {
                    die("Prepare failed: " . htmlspecialchars($conn->error));
                }
                $keyQuery->bind_param("ss", $key, $username);

                if ($keyQuery->execute()) {
                    // Success banner
                    echo '<div class="SystemAlert">
                        <div class="SystemAlertText" style="background-color: red; color: white; padding: 10px; margin-bottom: 15px;">
                            <strong>Success!</strong> generated key successfully (refresh to see your tix change): ' . htmlspecialchars($key) . '
                        </div>
                    </div>';
                } else {
                    // Failure banner
                    echo '<div class="SystemAlert">
                        <div class="SystemAlertText" style="background-color: red; color: white; padding: 10px; margin-bottom: 15px;">
                            <strong>Error!</strong> failed to generate the key: ' . htmlspecialchars($conn->error) . '
                        </div>
                    </div>';
                }

                $keyQuery->close();
            } else {
                // Failure banner for deducting tix
                echo '<div class="SystemAlert">
                    <div class="SystemAlertText" style="background-color: red; color: white; padding: 10px; margin-bottom: 15px;">
                        <strong>Err!</strong> oh shoot we forgot to deduct the tix uhhh thats a free invite key ig: ' . htmlspecialchars($conn->error) . '
                    </div>
                </div>';
            }

            $updateTixQuery->close();
        } else {
            // Insufficient tix banner
            echo '<div class="SystemAlert">
                <div class="SystemAlertText" style="background-color: red; color: white; padding: 10px; margin-bottom: 15px;">
                    <strong>Notice:</strong> you need like 100 tix to get one
                </div>
            </div>';
        }
    } else {
        // User not found banner
        echo '<div class="SystemAlert">
            <div class="SystemAlertText" style="background-color: red; color: white; padding: 10px; margin-bottom: 15px;">
                <strong>err!</strong> user not found wth
            </div>
        </div>';
    }

    $ticketCheckQuery->close();
}

// Invite key redemption functionality for all users
if (isset($_POST['redeemKey'])) {
    $inviteKey = trim($_POST['inviteKey']);
    $username = $_USER['username'];

    // Check if the invite key exists and is not used
    $stmt = $conn->prepare("SELECT id FROM gamekeys WHERE gamekeys = ? AND used = 0");
    if (!$stmt) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }
    $stmt->bind_param('s', $inviteKey);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $gameKeyId = $row['id'];

        // Mark the invite key as used and store who used it
        $updateStmt = $conn->prepare("UPDATE gamekeys SET used = 1, username = ? WHERE id = ?");
        if (!$updateStmt) {
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }
        $updateStmt->bind_param('si', $username, $gameKeyId);

        if ($updateStmt->execute()) {
            echo '<div class="SystemAlert">
            <div class="SystemAlertText" style="background-color: red; color: white; padding: 10px; margin-bottom: 15px;">
                <strong>Err</strong> successfully deleted the key
            </div>
        </div>';
        } else {
            echo '<div class="SystemAlert">
            <div class="SystemAlertText" style="background-color: red; color: white; padding: 10px; margin-bottom: 15px;">
                <strong>Err</strong> failed to delete the key
            </div>
        </div>';
        }

        $updateStmt->close();
    } else {
        echo '<div class="SystemAlert">
            <div class="SystemAlertText" style="background-color: red; color: white; padding: 10px; margin-bottom: 15px;">
                <strong>Err</strong> invalid key wth
            </div>
        </div>';
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>referral Program</title>
</head>
<body>
    <h1>Referral Program</h1>

    <!-- Invite Keys Program -->
    <h2>referral Program</h2>
    <p>if you click generate invite key, you agree to spend 100 tix to get one</p>
        <form method="POST" action="">
            <input type="submit" name="generateKey" value="Generate Invite Key" class="Button">
        </form>

    <!-- Form to delete an invite key -->
    <h3>delete invite key</h3>
    <form method="POST" action="">
        <input type="text" name="inviteKey" placeholder="delete invite key" required>
        <input type="submit" name="redeemKey" value="delete Key" class="Button">
    </form>

    <!-- Display existing invite keys for the user who generated them -->
    <h3>generated invite keys</h3>
    <table border="1">
        <tr>
            <th>invite key</th>
            <th>status</th>
        </tr>

        <?php
        // Fetch existing invite keys for the logged-in user who generated them
        $inviteKeysQuery = $conn->prepare("SELECT gamekeys, used FROM gamekeys WHERE creator = ?");
        if (!$inviteKeysQuery) {
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }
        $inviteKeysQuery->bind_param('s', $_USER['username']);
        $inviteKeysQuery->execute();
        $inviteKeysResult = $inviteKeysQuery->get_result();

        if ($inviteKeysResult->num_rows > 0) {
            while ($row = $inviteKeysResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['gamekeys']) . "</td>";
                echo "<td>" . ($row['used'] ? "Used" : "Not Used") . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No keys generated yet.</td></tr>";
        }

        $inviteKeysQuery->close();
        ?>
    </table>
</body>
</html>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/api/WebsiteBuild/footer.php"; ?>
