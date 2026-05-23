<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

echo '<link rel="stylesheet" href="/Admin/admin-styles.css">';

if($logged == "no")
{
        header("Location: /Login/Default.aspx");
        exit();
}

if($_USER['administrator'] !== "yes"){
        header("Location: /Login/Default.aspx");
        exit();
}

$banners = "SELECT * FROM badges";
$real = mysqli_query($conn,$banners);

if (isset($_POST['upload'])) {
    $uploader = $_USER['id'];
    $text = htmlspecialchars($_POST['text']);
    if (!empty($text)) {
        // this doesnt need to be this advanced. fixed the ' bug with gpt.
        // i want pdo :pray:
        $thumb = $_POST['thumb'];
        $desc = $_POST['description'];

        // Create a prepared statement
        $stmt = $conn->prepare("INSERT INTO badges (name, description, thumb) VALUES (?, ?, ?)");

        // Bind parameters
        $stmt->bind_param("sss", $text, $desc, $thumbUrl);

        // Set thumb URL
        $thumbUrl = 'https://emeraldolds.glados.pro/Thumbs/Badge.aspx?assetId=';

        // Execute the statement
        if ($stmt->execute()) {
            // Get the ID of the last inserted record
            $newid = $stmt->insert_id;

            // Update thumb URL
            $thumbUrl .= $newid;

            // Update thumb URL in the database
            $stmt = $conn->prepare("UPDATE badges SET thumb = ? WHERE id = ?");
            $stmt->bind_param("si", $thumbUrl, $newid);
            $stmt->execute();

            // Move uploaded file
            move_uploaded_file($_FILES['thumb']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/Thumbs/BadgeCache/' . $newid . '.jpg');

            // Redirect to a page
            header("Location: https://emeraldolds.glados.pro/Admin/ManageBadges.aspx");
            exit(); // Stop execution after redirection
        } else {
            // Handle the case where the statement execution fails
            echo "Error: " . $conn->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo 'Please provide a name for the badge.';
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    echo $id;
    // SCARY
    $itemq = mysqli_query($conn, "DELETE FROM badges WHERE id = $id") or die(mysqli_error($conn));

    header("Location: https://emeraldolds.glados.pro/Admin/ManageBadges.aspx");
    exit;
}
if (isset($_POST['finishedit'])) {
    $desc = $_POST['editdesc'];
    $id = $_POST['id'];
    $itemq = mysqli_query($conn, "UPDATE badges SET description = '$desc' WHERE id = $id");
    header("Location: https://emeraldolds.glados.pro/Admin/ManageBadges.aspx");
    exit;
}
?>
<script>
    function editBadge(id) {
        event.preventDefault();
        let field = document.getElementById('field' + id);
        let editDesc = field.querySelector('#editdesc');
        let staticDesc = field.querySelector('#staticdesc');
        let gbtns = field.querySelector('#gbtns');
        let gbtns2 = field.querySelector('#gbtns2');
        staticDesc.style.display = "none";
        editDesc.style.display = "block";
        gbtns.style.display = "none";
        gbtns2.style.display = "flex";
    }
</script>

<main class="admin-page" aria-labelledby="manage-badges">
    <h1 id="manage-badges" class="admin-title">Manage badges</h1>
    <p class="admin-subtitle">Edit badge descriptions, upload new art, and award badges directly to users.</p>

    <div class="admin-grid">
        <?php
        if($real) {
            while($row = mysqli_fetch_assoc($real)) {

                echo '<form class="admin-card admin-item-card" method="POST" action enctype="multipart/form-data">';
                echo '    <fieldset id="field'.$row['id'].'">';
                echo '        <input type="hidden" name="id" value="'. $row['id'] .'">';
                echo '        <div class="admin-inline" style="justify-content: space-between;">';
                echo '            <h3 style="margin:0;">'. htmlspecialchars($row['name']) .'</h3>';
                echo '            <span class="admin-chip">Badge #'. $row['id'] .'</span>';
                echo '        </div>';
                echo '        <img src="'. htmlspecialchars($row['thumb']) .'" alt="Badge thumbnail for '. htmlspecialchars($row['name']) .'" style="width:65%; border-radius:12px; border:1px solid var(--admin-border);">';
                echo '        <p id="staticdesc" class="admin-helper" style="margin-top:0.75rem;">'. htmlspecialchars($row['description']) .'</p>';
                echo '        <textarea id="editdesc" name="editdesc" rows="6" placeholder="Description" class="admin-textarea" style="display:none;">'. htmlspecialchars($row['description']) .'</textarea>';
                echo '        <div class="admin-actions" id="gbtns">';
                echo '            <button name="edit" id="edit" class="admin-button" type="submit" onclick="editBadge('.$row['id'].'); return false;">Edit</button>';
                echo '            <button name="delete" id="delete" class="admin-button danger" type="submit" value="Delete">Delete</button>';
                echo '            <button name="award" id="award" class="admin-button secondary" type="button" onclick="window.open(\'https://emeraldolds.glados.pro/Admin/AwardBadge.aspx?ID='.$row['id'].'\',\'_self\')">Award</button>';
                echo '        </div>';
                echo '        <div class="admin-actions" id="gbtns2" style="display:none;">';
                echo '            <button name="finishedit" id="finishedit" class="admin-button" type="submit" value="Finish Editing">Finish editing</button>';
                echo '        </div>';
                echo '    </fieldset>';
                echo '</form>';

            }
        }
        ?>
    </div>

    <form class="admin-card admin-item-card" method="POST" action enctype="multipart/form-data" aria-label="Create badge">
        <fieldset>
            <legend>New badge</legend>
            <div class="admin-field">
                <label for="badge-name">Name</label>
                <input name="text" type="text" id="badge-name" placeholder="Name" class="admin-input" required>
            </div>
            <div class="admin-field">
                <label for="thumb">Upload badge image</label>
                <input type="file" name="thumb" id="thumb" accept="image/*" required class="admin-input">
                <p class="admin-helper">Use a square image for best results.</p>
            </div>
            <div class="admin-field">
                <label for="description">Description</label>
                <textarea name="description" rows="3" id="description" placeholder="Description" class="admin-textarea"></textarea>
            </div>
            <div class="admin-actions">
                <button name="upload" id="upload" class="admin-button" type="submit" value="Create">Create badge</button>
            </div>
        </fieldset>
    </form>
</main>
    
<title>emeraldnews | Manage Badges</title>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
