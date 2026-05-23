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

?>
<?php
    $notapproveditemsalreadyq = mysqli_query($conn,"SELECT * FROM catalog WHERE pending = 1 AND type != 'decal'") or die(mysqli_error($conn));
    $notapproveditemsalready = mysqli_num_rows($notapproveditemsalreadyq);
?>
<style>
  .admin-card{
    background-color: black;
  }
</style>
<div class="admin-hero" role="banner">
    <h2>Administration Panel</h2>
    <p>Welcome! Please read the rules before making changes, and check with gladosb5 if you're unsure where to start.</p>
</div>

<main class="admin-page" aria-labelledby="admin-dashboard">
    <h1 id="admin-dashboard" class="admin-title">Admin tools</h1>
    <p class="admin-subtitle">Pick a category to keep the community safe and well maintained.</p>

    <div class="admin-grid">
        <div class="admin-card">
            <h3>Moderation</h3>
            <ul class="admin-links">
                <li class="admin-link-item"><a href="/Admin/Ban.aspx">Ban Users</a></li>
                <li class="admin-link-item"><a href="/Admin/Delete.aspx">Ban Assets</a></li>
                <li class="admin-link-item"><a href="/Admin/AltIdentifier.aspx">Alt Identifier</a></li>
                <li class="admin-link-item"><a href="/Admin/Chatlogs.aspx">In-game Chat Logs</a></li>
                <li class="admin-link-item"><a href="">Reports</a></li>
            </ul>
        </div>

        <div class="admin-card">
            <h3>Economy</h3>
            <ul class="admin-links">
                <li class="admin-link-item"><a href="/Admin/GiftMoney.aspx">Gift Money</a></li>
                <li class="admin-link-item"><a href="/api/admin/key.php">Generate Key</a></li>
            </ul>
        </div>

        <div class="admin-card">
            <h3>Misc.</h3>
            <ul class="admin-links">
                <li class="admin-link-item"><a href="/Admin/ManageBanners.aspx">Manage Banners</a></li>
                <li class="admin-link-item"><a href="/Admin/ManageBadges.aspx">Manage Badges</a></li>
            </ul>
        </div>

        <div class="admin-card">
            <h3>Scary Stuff</h3>
            <ul class="admin-links">
                <li class="admin-link-item"><a href="/api/admin/enablemaintenance.php">Enable lockdown mode</a></li>
                <li class="admin-link-item"><a href="/api/admin/disablemaintenance.php">Disable lockdown mode</a></li>
            </ul>
        </div>

        <div class="admin-card">
            <h3>Other</h3>
            <ul class="admin-links">
                <li class="admin-link-item"><a href="/Admin/manageleader.php">Manage the brainrot leaderboard</a></li>
            </ul>
        </div>
    </div>

    <div class="admin-footer-note">
        <a href="http://emeraldolds.glados.pro/Admin/Rules.aspx">Read the admin rules before doing anything</a>
    </div>
</main>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
<title>emeraldnews | Administration</title>
