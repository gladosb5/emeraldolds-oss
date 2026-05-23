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

if(isset($_GET['ID'])) {
    $id = $_GET['ID'];
} else {
    $id = "";
}

if(isset($_POST['render'])) {
    $bid = (int)$_POST['bid'];
    $aid = (int)$_POST['aid'];
    $stmt = $conn->prepare("INSERT INTO ownedbadges (userid, badgeid) VALUES (?, ?)");
    $stmt->bind_param("ii", $aid, $bid);
    $stmt->execute();
    $stmt->close();
}
?>

<main class="admin-page" aria-labelledby="award-badge">
    <h1 id="award-badge" class="admin-title">Award badges</h1>
    <p class="admin-subtitle">Confirm the badge and player before awarding.</p>

    <form class="admin-form" method="POST" action enctype="multipart/form-data" aria-label="Award badge form">
        <div class="admin-grid">
            <div class="admin-card">
                <div class="admin-field">
                    <label for="bid">Badge ID</label>
                    <input name="bid" id="bid" type="text" value="<?=$id?>" maxlength="64" class="admin-input" placeholder="Enter badge id" required>
                </div>
                <div class="admin-field">
                    <label for="aid">User ID</label>
                    <input name="aid" id="aid" type="text" value="" maxlength="64" class="admin-input" placeholder="Enter user id" required>
                </div>
            </div>
            <div class="admin-card" style="text-align:center;">
                <p class="admin-helper">Preview</p>
                <img id="renderImage" src="https://emeraldolds.glados.pro/Thumbs/Badge.aspx?assetId=<?=$id?>" alt="Badge preview" style="width:220px; border-radius:12px; border:1px solid var(--admin-border);">
            </div>
        </div>

        <div class="admin-actions">
            <button name="render" id="render" class="admin-button" type="submit" value="Render">Award badge</button>
        </div>
    </form>
</main>
        <script>
        let bid = document.getElementById("bid");
        let img = document.getElementById("renderImage");
        bid.addEventListener('input', function() {
            img.src = "https://emeraldolds.glados.pro/Thumbs/Badge.aspx?assetId=" + bid.value;
        });
    </script>

<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
?>
