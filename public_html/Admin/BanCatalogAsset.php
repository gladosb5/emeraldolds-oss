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

if(isset($_POST['ban'])){
	$id = $_POST['id'];
	
	$banq = mysqli_query($conn,"UPDATE catalog SET name = '[ Content Deleted ]', description = '[ Content Deleted ]', sale = 0 WHERE id = '$id'");
	
	if(unlink($_SERVER['DOCUMENT_ROOT']."/Thumbs/AssetCache/".$id.".png") && unlink($_SERVER['DOCUMENT_ROOT']."/Thumbs/AssetCache/".$id."-small.png") || unlink($_SERVER['DOCUMENT_ROOT']."/asset/assets/".$id.".php")){
	
	echo "done";
	
	}else{
		
	echo "error";
	}
}

?>
<main class="admin-page" aria-labelledby="ban-asset">
    <h1 id="ban-asset" class="admin-title">Remove a catalog asset</h1>
    <p class="admin-subtitle">Hide inappropriate items from the storefront and clear cached thumbnails.</p>

    <form class="admin-form" method="POST" aria-label="Ban asset form">
        <div class="admin-field">
            <label for="asset-id">Asset ID</label>
            <input class="admin-input" id="asset-id" type="text" name="id" placeholder="Enter the asset id" required>
        </div>

        <div class="admin-actions">
            <button class="admin-button danger" type="submit" value="ban" name="ban">Remove asset</button>
            <p class="admin-helper">This renames the asset, disables sales, and clears cached thumbnails.</p>
        </div>
    </form>
</main>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


