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

<main class="admin-page" aria-labelledby="place-render">
    <h1 id="place-render" class="admin-title">Place rendering</h1>
    <p class="admin-subtitle">Tools for refreshing place thumbnails will live here soon.</p>
    <div class="admin-card">
        <p class="admin-helper">Rendering controls are being prepared. In the meantime, contact gladosb5 if you need a place thumbnail regenerated.</p>
    </div>
</main>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
