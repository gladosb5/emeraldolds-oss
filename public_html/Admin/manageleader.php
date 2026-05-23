<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

echo '<link rel="stylesheet" href="/Admin/admin-styles.css">';

if($logged == "no") {
    header("Location: /Login/Default.aspx");
    exit();
}

if($_USER['administrator'] !== "yes") {
    header("Location: /Login/Default.aspx");
    exit();
}

$leaderboard_query = "SELECT * FROM brainrot_leaderboard";
$results = mysqli_query($conn, $leaderboard_query);

if (isset($_POST['upload'])) {
    $uploader = (int)$_USER['id'];
    $username = $_POST['username'];
    $points = intval($_POST['points']);

    if(!empty($username) && !empty($points)) {
        $stmt = $conn->prepare("INSERT INTO brainrot_leaderboard (username, points, uploader) VALUES (?, ?, ?)");
        $stmt->bind_param("sii", $username, $points, $uploader);
        $stmt->execute() or die($stmt->error);
        $stmt->close();
        header("Location: /Admin/manageleader.php");
    } else {
        echo 'Please fill all fields.';
    }
}

if (isset($_POST['delete'])) {
    $id = (int)$_POST['id'];
    $stmt = $conn->prepare("DELETE FROM brainrot_leaderboard WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute() or die($stmt->error);
    $stmt->close();
    header("Location: /Admin/manageleader.php");
    exit;
}

if (isset($_POST['clear'])) {
    $conn->query("DELETE FROM brainrot_leaderboard") or die($conn->error);
    $conn->query("ALTER TABLE brainrot_leaderboard AUTO_INCREMENT = 1") or die($conn->error);
    header("Location: /Admin/manageleader.php");
    exit;
}
?>

<main class="admin-page" aria-labelledby="leaderboard-admin">
    <h1 id="leaderboard-admin" class="admin-title">Manage the leaderboard</h1>
    <p class="admin-subtitle">Adjust brainrot leaderboard entries and keep the rankings accurate.</p>

    <div class="admin-grid">
        <?php
        if($results) {
            while($row = mysqli_fetch_assoc($results)) {
                echo '<form class="admin-card admin-item-card" method="POST" action="" enctype="multipart/form-data">';
                echo '    <fieldset>';
                echo '        <input type="hidden" name="id" value="'. $row['id'] .'">';
                echo '        <legend>Entry '. $row['id'] .'</legend>';
                echo '        <div class="admin-inline" style="justify-content: space-between;">';
                echo '            <h3 style="margin:0;">'. htmlspecialchars($row['username']) .'</h3>';
                echo '            <span class="admin-chip">Points: '. htmlspecialchars($row['points']) .'</span>';
                echo '        </div>';
                echo '        <div class="admin-actions" style="margin-top:0.75rem;">';
                echo '            <button name="delete" type="submit" class="admin-button danger" value="Delete">Delete</button>';
                echo '        </div>';
                echo '    </fieldset>';
                echo '</form>';
            }
        }
        ?>
    </div>

    <form class="admin-card admin-item-card" method="POST" action="" enctype="multipart/form-data" aria-label="Add leaderboard entry">
        <fieldset>
            <legend>New entry</legend>
            <div class="admin-field">
                <label for="username">Username</label>
                <input name="username" id="username" placeholder="Username" type="text" class="admin-input" required>
            </div>
            <div class="admin-field">
                <label for="points">Points</label>
                <input name="points" id="points" placeholder="Points" type="number" class="admin-input" min="0" required>
            </div>
            <div class="admin-actions">
                <button name="upload" type="submit" class="admin-button" value="Add Entry">Add entry</button>
                <button name="clear" type="submit" class="admin-button secondary" value="Clear All">Clear all</button>
            </div>
        </fieldset>
    </form>
</main>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
