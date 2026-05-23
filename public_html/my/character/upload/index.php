<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no"){
	header("Location: /Login/Default.aspx");
}

if(isset($_GET['type'])){
	$type = (int)$_GET['type'];
}else{
	header("Location: /Error.aspx");
}

function getTitle($type) {
    switch ($type) {
        case 0:
            return "T-Shirt Builder";
        case 1:
            return "Shirt Builder";
        case 2:
            return "Pants Builder";
        case 3:
            return "Decal Builder";
    }
}

if(isset($_POST['shirt'])){
	$myid = $_USER['id'];
	if($_USER['tix'] < 0){
		echo "no enough tix";
	}else{
	if (!isset($_FILES['ShirtGraphicUpload']['tmp_name']) || empty($_FILES['ShirtGraphicUpload']['tmp_name'])) {
		echo "No image.";
	} else {
		// Check if the uploaded file is a valid image type
		$validImageTypes = ['image/png', 'image/jpeg'];

		if (!in_array($_FILES['ShirtGraphicUpload']['type'], $validImageTypes)) {
			echo "Invalid image type. Please upload a PNG or JPG file.";
		} else {
			// Continue with your existing code for processing the image

			// Handle Decal
			$decalq = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, buywith, price, type, sale, pending) VALUES ('Decal', 'Decal', '1', 'tix', '0', 'decal', '0', '0')") or die(mysqli_error($conn));
			$decal = mysqli_insert_id($conn);

			// Your XML content
			$xmlContent = '<?xml version="1.0" encoding="utf-8"?>
			<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
				<External>null</External>
				<External>nil</External>
				<Item class="Shirt" referent="RBX0">
					<Properties>
						<Content name="ShirtTemplate">
							<url>thetextureid</url>
						</Content>
						<string name="Name">Shirt</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</roblox>';

			// Load XML content into a DOMDocument
			$doc = new DOMDocument;
			$doc->preserveWhiteSpace = false;
			$doc->loadXML($xmlContent);
			$doc->formatOutput = true;

			// Output the formatted XML
			$xmlhehe = $doc->saveXML();
			$xmlhehe = str_replace("thetextureid","http://emeraldolds.glados.pro/asset/?id=$decal", $xmlhehe);

			if (isset($_FILES['ShirtGraphicUpload']['tmp_name']) && !empty($_FILES['ShirtGraphicUpload']['tmp_name'])) {
				move_uploaded_file($_FILES['ShirtGraphicUpload']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/asset/assets/" . $decal . ".php");
			}

			$itemq = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, buywith, price, type, sale, pending) VALUES ('Shirt', 'Shirt', '{$_USER['id']}', 'tix', '0', 'shirt', '0', '1')") or die(mysqli_error($conn));

			$item = mysqli_insert_id($conn);

			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/asset/assets/" . $item . ".php", $xmlhehe);
			
			$pendingthumb = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Thumbs/AssetCache/Pending-250x250.png");
			
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AssetCache/$item.png", $pendingthumb);
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AssetCache/$item-small.png", $pendingthumb);
			
			$timeouttime = time();
			$itemq2 = mysqli_query($conn,"INSERT INTO owned_items (itemid,ownerid,type,time_purchased_timeout) VALUES ('$item', '{$_USER['id']}', 'shirt','$timeouttime')") or die(mysqli_error($conn));
			
			header("Location: /Item.aspx?ID=$item");
		}
	}
}
}if(isset($_POST['tshirt'])){
	$myid = $_USER['id'];
	if($_USER['tix'] < 0){
		echo "no enough tix";
	}else{
	if (!isset($_FILES['TShirtGraphicUpload']['tmp_name']) || empty($_FILES['TShirtGraphicUpload']['tmp_name'])) {
		echo "No image.";
	} else {
		// Check if the uploaded file is a valid image type
		$validImageTypes = ['image/png', 'image/jpeg'];

		if (!in_array($_FILES['TShirtGraphicUpload']['type'], $validImageTypes)) {
			echo "Invalid image type. Please upload a PNG or JPG file.";
		} else {
			// Continue with your existing code for processing the image

			// Handle Decal
			$decalq = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, buywith, price, type, sale, pending) VALUES ('Decal', 'Decal', '1', 'tix', '0', 'decal', '0', '0')") or die(mysqli_error($conn));
			$decal = mysqli_insert_id($conn);

			// Your XML content
			$xmlContent = '<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
  <External>null</External>
  <External>nil</External>
  <Item class="ShirtGraphic" referent="RBX0">
    <Properties>
      <Content name="Graphic">
        <url>thetextureid</url>
      </Content>
      <string name="Name">Shirt Graphic</string>
      <bool name="archivable">true</bool>
    </Properties>
  </Item>
</roblox>';

			// Load XML content into a DOMDocument
			$doc = new DOMDocument;
			$doc->preserveWhiteSpace = false;
			$doc->loadXML($xmlContent);
			$doc->formatOutput = true;

			// Output the formatted XML
			$xmlhehe = $doc->saveXML();
			$xmlhehe = str_replace("thetextureid","http://emeraldolds.glados.pro/asset/?id=$decal", $xmlhehe);

			if (isset($_FILES['TShirtGraphicUpload']['tmp_name']) && !empty($_FILES['TShirtGraphicUpload']['tmp_name'])) {
				move_uploaded_file($_FILES['TShirtGraphicUpload']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/asset/assets/" . $decal . ".php");
			}

			$itemq = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, buywith, price, type, sale, pending) VALUES ('T-Shirt', 'T-Shirt', '{$_USER['id']}', 'tix', '0', 'tshirt', '0', '1')") or die(mysqli_error($conn));

			$item = mysqli_insert_id($conn);

			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/asset/assets/" . $item . ".php", $xmlhehe);
			
			$pendingthumb = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Thumbs/AssetCache/Pending-250x250.png");
			
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AssetCache/$item.png", $pendingthumb);
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AssetCache/$item-small.png", $pendingthumb);
			
			$timeouttime = time();
			$itemq2 = mysqli_query($conn,"INSERT INTO owned_items (itemid,ownerid,type,time_purchased_timeout) VALUES ('$item', '{$_USER['id']}', 'tshirt','$timeouttime')") or die(mysqli_error($conn));
			
			header("Location: /Item.aspx?ID=$item");
		}
	}
}

}if(isset($_POST['decal'])){
	$myid = $_USER['id'];
	if($_USER['tix'] < 5){
		echo "no enough tix";
	}else{
	if (!isset($_FILES['DecalGraphicUpload']['tmp_name']) || empty($_FILES['DecalGraphicUpload']['tmp_name'])) {
		echo "No image.";
	} else {
		// Check if the uploaded file is a valid image type
		$validImageTypes = ['image/png', 'image/jpeg'];

		if (!in_array($_FILES['DecalGraphicUpload']['type'], $validImageTypes)) {
			echo "Invalid image type. Please upload a PNG or JPG file.";
		} else {
			// Continue with your existing code for processing the image

			// Handle Decal
			$decalq = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, buywith, price, type, sale, pending) VALUES ('Image', 'Image', '1', 'tix', '0', 'decal', '0', '0')") or die(mysqli_error($conn));
			$decal = mysqli_insert_id($conn);

			// Your XML content
			$xmlContent = '<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
  <External>null</External>
  <External>nil</External>
  <Item class="Decal" referent="RBX0">
    <Properties>
      <token name="Face">5</token>
      <string name="Name">Decal</string>
      <float name="Shiny">20</float>
      <float name="Specular">0</float>
      <Content name="Texture">
        <url>thetextureid</url>
      </Content>
      <bool name="archivable">true</bool>
    </Properties>
  </Item>
</roblox>';

			// Load XML content into a DOMDocument
			$doc = new DOMDocument;
			$doc->preserveWhiteSpace = false;
			$doc->loadXML($xmlContent);
			$doc->formatOutput = true;

			// Output the formatted XML
			$xmlhehe = $doc->saveXML();
			$xmlhehe = str_replace("thetextureid","http://emeraldolds.glados.pro/asset/?id=$decal", $xmlhehe);

			if (isset($_FILES['DecalGraphicUpload']['tmp_name']) && !empty($_FILES['DecalGraphicUpload']['tmp_name'])) {
				move_uploaded_file($_FILES['DecalGraphicUpload']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/asset/assets/" . $decal . ".php");
			}

			$itemq = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, buywith, price, type, sale, pending) VALUES ('Decal', 'Decal', '{$_USER['id']}', 'tix', '0', 'decals', '0', '1')") or die(mysqli_error($conn));

			$item = mysqli_insert_id($conn);

			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/asset/assets/" . $item . ".php", $xmlhehe);
			
			$pendingthumb = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Thumbs/AssetCache/Pending-250x250.png");
			
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AssetCache/$item.png", $pendingthumb);
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AssetCache/$item-small.png", $pendingthumb);
			
			$timeouttime = time();
			$itemq2 = mysqli_query($conn,"INSERT INTO owned_items (itemid,ownerid,type,time_purchased_timeout) VALUES ('$item', '{$_USER['id']}', 'decals','$timeouttime')") or die(mysqli_error($conn));
			
			header("Location: /Item.aspx?ID=$item");
		}
	}
}

}

if(isset($_POST['pants'])){
	$myid = $_USER['id'];
	if($_USER['tix'] < 5){
		echo "no enough tix";
	}else{
	if (!isset($_FILES['PantsGraphicUpload']['tmp_name']) || empty($_FILES['PantsGraphicUpload']['tmp_name'])) {
		echo "No image.";
	} else {
		// Check if the uploaded file is a valid image type
		$validImageTypes = ['image/png', 'image/jpeg'];

		if (!in_array($_FILES['PantsGraphicUpload']['type'], $validImageTypes)) {
			echo "Invalid image type. Please upload a PNG or JPG file.";
		} else {
			// Continue with your existing code for processing the image

			// Handle Decal
			$decalq = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, buywith, price, type, sale, pending) VALUES ('Decal', 'Decal', '1', 'tix', '0', 'decal', '0', '0')") or die(mysqli_error($conn));
			$decal = mysqli_insert_id($conn);

			// Your XML content
			$xmlContent = '<?xml version="1.0" encoding="utf-8"?>
			<roblox xmlns:xmime="http://www.w3.org/2005/05/xmlmime" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="http://www.roblox.com/roblox.xsd" version="4">
				<External>null</External>
				<External>nil</External>
				<Item class="Pants" referent="RBX0">
					<Properties>
						<Content name="PantsTemplate">
							<url>thetextureid</url>
						</Content>
						<string name="Name">Pants</string>
						<bool name="archivable">true</bool>
					</Properties>
				</Item>
			</roblox>';

			// Load XML content into a DOMDocument
			$doc = new DOMDocument;
			$doc->preserveWhiteSpace = false;
			$doc->loadXML($xmlContent);
			$doc->formatOutput = true;

			// Output the formatted XML
			$xmlhehe = $doc->saveXML();
			$xmlhehe = str_replace("thetextureid","http://emeraldolds.glados.pro/asset/?id=$decal", $xmlhehe);

			if (isset($_FILES['PantsGraphicUpload']['tmp_name']) && !empty($_FILES['PantsGraphicUpload']['tmp_name'])) {
				move_uploaded_file($_FILES['PantsGraphicUpload']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/asset/assets/" . $decal . ".php");
			}

			$itemq = mysqli_query($conn, "INSERT INTO catalog (name, description, creatorid, buywith, price, type, sale, pending) VALUES ('Pants', 'Pants', '{$_USER['id']}', 'tix', '0', 'pants', '0', '1')") or die(mysqli_error($conn));

			$item = mysqli_insert_id($conn);

			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/asset/assets/" . $item . ".php", $xmlhehe);
			
			$pendingthumb = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Thumbs/AssetCache/Pending-250x250.png");
			
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AssetCache/$item.png", $pendingthumb);
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/Thumbs/AssetCache/$item-small.png", $pendingthumb);
			
			$timeouttime = time();
			$itemq2 = mysqli_query($conn,"INSERT INTO owned_items (itemid,ownerid,type,time_purchased_timeout) VALUES ('$item', '{$_USER['id']}', 'pants','$timeouttime')") or die(mysqli_error($conn));
			
			header("Location: /Item.aspx?ID=$item");
		}
	}
	}
}

?>
<title>
        emeraldnews - <?php echo getTitle($type); ?>
    </title>
<div id="Body">
	<style>
	#Body table
	{
		border: 1px black solid;
	}
	.tablehead
	{
		font-size:16px; font-weight: bold; border-bottom:black 1px solid; width: 100%; background-color: #CCCCCC; color: #222222;
	}
	.tablebody
	{
		font-weight: lighter; background-color: transparent;font-family: Verdana;
	}
	.tablebody a {
	    color:blue;
	}
	.tablebody a:hover {
	    cursor:pointer;
	}
	th.tablebody {
    text-align: left;
    padding-left: 10px;
}
</style>
<?php if($type == 0){ ?>
<h1>T-Shirt Builder</h1>
<big>
   <table cellspacing="0px" width="100%">
      <tbody>
         <tr>
            <th class="tablehead">Instructions</th>
         </tr>
         <tr>
            <th class="tablebody">
                <p>On emeraldnews, a T-Shirt is a transparent torso adornment with a decal applied to the front surface. To create a T-Shirt:</p>
                <ol>
                    <li>Click the "Browse" button below.</li>
                    <li>Use the File Explorer that pops up to browse your computer.</li>
                    <li>Find and select the picture that you want to use as the shirt's decal. Most standard images (ONLY .PNG) will work.</li>
                    <li>Finally, click the "Create T-Shirt" button.</li>
                </ol>
                <p>The image you selected will be uploaded to emeraldnews, where we will create a T-Shirt and add it to your inventory. To wear this T-Shirt, simply go to the <a href="https://emeraldolds.glados.pro/my/character/">Change Character</a> page, find them in your wardrobe, and click to wear them.</p>
            </th>
         </tr>
      </tbody>
   </table>
   <br />
   <table cellspacing="0px" width="100%">
      <tbody>
         <tr>
            <th class="tablehead">Upload Texture</th>
         </tr>
         <tr>
            <th class="tablebody">
               <center>
                  <form method="post" enctype="multipart/form-data" style="padding:25px;">
                    <input name="csrf_token" value="c1c390780acd13d2b67fa5e623f03859" style="display:none;" />
                    <input type="file" name="TShirtGraphicUpload" id="fileToUpload">
                    <br /><br />
                    <input type="submit" value="Create T-Shirt" name="tshirt">
                  </form>
               </center>
            </th>
         </tr>
      </tbody>
   </table>
</big>

<?php }elseif($type == 1){ ?>
<h1>Shirt Builder</h1>
<big>
   <table cellspacing="0px" width="100%">
      <tbody>
         <tr>
            <th class="tablehead">Instructions</th>
         </tr>
         <tr>
            <th class="tablebody">
                <p>On emeraldnews, a Shirt is a textured character adornment that is applied to all surfaces of the character's arms and torso. To create Shirts:</p>
                <ol>
                    <li>Open the <a href="Template1.png">Shirt Template</a> in the image editor of your choice.</li>
                    <li>Modify the template to suit your tastes.</li>
                    <li>Save the customized Shirt texture to your computer.</li>
                    <li>Click the "Browse" button below.</li>
                    <li>Use the File Explorer that pops up to browse your computer.</li>
                    <li>Find and select the newly created Shirt Texture.</li>
                    <li>Finally, click the "Create Shirt" button.</li>
                </ol>
                <p>The texture you created will be uploaded to emeraldnews, where we will add your Shirt and add it to your inventory. To wear this Shirt, simply go to the <a href="/my/character/">Change Character</a> page, find them in your wardrobe, and click to wear them.</p>
                <p style="display:none;">For more information, read the tutorial: <a href="#">How to Make Shirts and Pants</a>.</p>
            </th>
         </tr>
      </tbody>
   </table>
   <br />
   <table cellspacing="0px" width="100%">
      <tbody>
         <tr>
            <th class="tablehead">Upload Texture</th>
         </tr>
         <tr>
            <th class="tablebody">
               <center>
                  <form method="post" enctype="multipart/form-data" style="padding:25px;">
                    <input name="csrf_token" value="c1c390780acd13d2b67fa5e623f03859" style="display:none;" />
                    <input type="file" name="ShirtGraphicUpload" id="fileToUpload">
                    <br /><br />
                    <input type="submit" value="Create Shirt" name="shirt">
                  </form>
               </center>
            </th>
         </tr>
      </tbody>
   </table>
</big>
<?php }elseif($type == 2){ ?>
<h1>Pants Builder</h1>
<big>
   <table cellspacing="0px" width="100%">
      <tbody>
         <tr>
            <th class="tablehead">Instructions</th>
         </tr>
         <tr>
            <th class="tablebody">
                <p>On emeraldnews, a Pants is a textured character adornment that is applied to all surfaces of the character's legs and torso. To create Pants:</p>
                <ol>
                    <li>Open the <a href="Template2.png">Pants Template</a> in the image editor of your choice.</li>
                    <li>Modify the template to suit your tastes.</li>
                    <li>Save the customized Pants texture to your computer.</li>
                    <li>Click the "Browse" button below.</li>
                    <li>Use the File Explorer that pops up to browse your computer.</li>
                    <li>Find and select the newly created Pants Texture.</li>
                    <li>Finally, click the "Create Pants" button.</li>
                </ol>
                <p>The texture you created will be uploaded to emeraldnews, where we will add your Pants and add it to your inventory. To wear this Pants, simply go to the <a href="/my/character/">Change Character</a> page, find them in your wardrobe, and click to wear them.</p>
                <p style="display:none;">For more information, read the tutorial: <a href="#">How to Make Shirts and Pants</a>.</p>
            </th>
         </tr>
      </tbody>
   </table>
   <br>
   <table cellspacing="0px" width="100%">
      <tbody>
         <tr>
            <th class="tablehead">Upload Texture</th>
         </tr>
         <tr>
            <th class="tablebody">
               <center>
                  <form method="post" enctype="multipart/form-data" style="padding:25px;">
                    <input name="csrf_token" value="c1c390780acd13d2b67fa5e623f03859" style="display:none;">
                    <input type="file" name="PantsGraphicUpload" id="fileToUpload">
                    <br><br>
                    <input type="submit" value="Create Pants" name="pants">
                  </form>
               </center>
            </th>
         </tr>
      </tbody>
   </table>
</big>
<?php } ?><?php if($type == 3){ ?>
<h1>Decal Builder</h1>
<big>
   <table cellspacing="0px" width="100%">
      <tbody>
         <tr>
            <th class="tablehead">Instructions</th>
         </tr>
         <tr>
            <th class="tablebody">
                <p>On emeraldnews, a Decal is an image that can be applied to one of a part's faces. To create a Decal:</p>
                <ol>
                    <li>Click the "Browse" button below.</li>
                    <li>Use the File Explorer that pops up to browse your computer.</li>
                    <li>Find and select the picture that you want to use as your decal. Only (.png) will work temporarily.</li>
                    <li>Finally, click the "Create Decal" button.</li>
                </ol>
                <p>The image you selected will be uploaded to emeraldnews, where we will add your Decal and add it to your inventory. To use this Decal, simply open the <strong>Insert</strong> menu in emeraldnews, choose My Decals, and click the Decal you wish to insert. You can drag the Decal onto the part you wish to decorate.</p>
            </th>
         </tr>
      </tbody>
   </table>
   <br />
   <table cellspacing="0px" width="100%">
      <tbody>
         <tr>
            <th class="tablehead">Upload Texture</th>
         </tr>
         <tr>
            <th class="tablebody">
               <center>
                  <form method="post" enctype="multipart/form-data" style="padding:25px;">
                    <input name="csrf_token" value="c1c390780acd13d2b67fa5e623f03859" style="display:none;" />
                    <input type="file" name="DecalGraphicUpload" id="fileToUpload">
                    <br /><br />
                    <input type="submit" value="Create Decal" name="decal">
                  </form>
               </center>
            </th>
         </tr>
      </tbody>
   </table>
</big>

<?php } ?>

</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


