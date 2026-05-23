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

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $userq = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $user = mysqli_fetch_assoc($userq);
    $ip = $user['IP'];
    $alts = mysqli_query($conn, "SELECT * FROM users WHERE IP = '$ip'");
} else {
    $id = "";
}

if(isset($_POST['search'])) {
    $aid = $_POST['aid'];
    header("Location: ?id=" . $aid);
}
?>

<main class="admin-page" aria-labelledby="find-alts">
    <h1 id="find-alts" class="admin-title">Identify alt accounts</h1>
    <p class="admin-subtitle">Search by user ID to review accounts sharing the same IP address.</p>

    <form class="admin-form" method="POST" action enctype="multipart/form-data" aria-label="Search for alt accounts">
        <div class="admin-field">
            <label for="aid">User ID</label>
            <input name="aid" id="aid" type="text" value="<?=$id?>" maxlength="64" class="admin-input" placeholder="Enter a user id" required>
        </div>
        <div class="admin-actions">
            <button name="search" id="search" class="admin-button" type="submit" value="Search">Search</button>
        </div>
    </form>

    <hr style="margin: 1.5rem 0; border: 1px solid var(--admin-border);">

    <?php if($id != "") { ?>
        <div class="admin-grid" aria-live="polite">
        <?php while($alt = mysqli_fetch_assoc($alts)) { $timestamp = $alt['lastseen'];
$date = new DateTime("@$timestamp");
$formattedDateTime = $date->format('Y-m-d H:i:s');
echo '<div class="admin-card admin-item-card">';
echo '    <fieldset>';
echo '        <legend>UserID: '.$alt['id'].'</legend>';
echo '        <h3 style="margin:0 0 0.25rem;"><a href="/User.aspx?ID='.$alt['id'].'">'.$alt['username'].'</a></h3>';
echo '        <p id="altblurb" class="admin-helper">'.htmlspecialchars($alt['blurb']).'</p>';
echo '        <div class="admin-inline" style="justify-content: space-between; font-size:0.95rem;">';
echo '            <span class="admin-helper">Join Date: '.$alt['JoinDate'].'</span>';
echo '            <span class="admin-helper">Last Online: '.$formattedDateTime.'</span>';
echo '        </div>';
echo '    </fieldset>';
echo '</div>'; }?>
        </div>
    <?php } else { ?>
        <p class="admin-helper">Enter a user ID to begin reviewing potential alternative accounts.</p>
    <?php } ?>
</main>

<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
?>
