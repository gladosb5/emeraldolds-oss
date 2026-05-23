<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$id = (int)addslashes($_GET['ID']);
$sql = "SELECT * FROM catalog WHERE id = '".$id."';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $lookfav = mysqli_query($conn, "SELECT * FROM catalog_favorites WHERE userid = {$_USER['id']} AND item = '$id'");
        $favorited = false;
        if(mysqli_num_rows($lookfav) != 0) {
            $favorited = true;   
        }
        $pricebux = (int)$row['price2'];
        $pricetix = (int)$row['price'];

        $creatorq = mysqli_query($conn, "SELECT * FROM users WHERE id='".$row['creatorid']."'") or die(mysqli_error($conn));
        $creator = mysqli_fetch_assoc($creatorq);
$owneditemsq = mysqli_query($conn, "SELECT * FROM owned_items WHERE itemid='".$row['id']."' AND ownerid='".$_USER['id']."'") or die(mysqli_error($conn));
$owneditems = mysqli_fetch_assoc($owneditemsq);
$totalfavorite = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM catalog_favorites WHERE item = '{$row['id']}'"));
if($owneditems) {$owned = 'yes';

$owneditemsrow = mysqli_num_rows($owneditemsq);
} else {$owned = 'no';}

/*
if(isset($_POST['buy'])){
	if($row['sale'] == 1){
		
	$checklatestbuyq = mysqli_query($conn, "SELECT * FROM owned_items WHERE itemid='".$row['id']."' AND ownerid='".$_USER['id']."' LIMIT 1") or die(mysqli_error($conn));
	
	if(mysqli_num_rows($checklatestbuyq) == 1){
		$latestbuy = mysqli_fetch_assoc($checklatestbuyq);
		
		$timelast = strtotime($latestbuy['time_purchased']);
		
		if($timelast <= time() + 15){
			echo "You're being rate limited.";
			exit;
		}
	}
		
	if($logged == "no"){
		header("Location: /Login/Default.aspx");
	}
	$type = $row['buywith'];
	if($type == "tix"){
		$money = $_USER['tix'];
	}elseif($type == "robux"){
		$money = $_USER['robux'];
	}else{
		die("Offline.");
	}
	
	if($money >= $row['price']){
		if($type == "tix"){
			$tix = $money - $row['price'];
			
			$tenPercent = round($row['price'] * 0.10);
			$newcreatormoney = $creator['tix'] + ($row['price'] - $tenPercent);
			$giveownermoneyq = mysqli_query($conn,"UPDATE users SET tix = '$newcreatormoney' WHERE id = '{$creator['id']}'") or die(mysqli_error($conn));
			$moneyq = mysqli_query($conn,"UPDATE users SET tix = '$tix' WHERE id = '{$_USER['id']}'") or die(mysqli_error($conn));
			$type = $row['type'];
			$itemq = mysqli_query($conn,"INSERT INTO owned_items (itemid,ownerid,type) VALUES ('$id', '{$_USER['id']}', '$type')") or die(mysqli_error($conn));
			echo "<p style='color:green'>Successfully purchased ".$row['name']." From ".$creator['username'].".</p>";
			header("Location: /Item.aspx?ID=". $id);
		}elseif($type == "robux"){
			$robux = $money - $row['price'];
			$tenPercent = round($row['price'] * 0.10);
			$newcreatormoney = $creator['robux'] + ($row['price'] - $tenPercent);
			$giveownermoneyq = mysqli_query($conn,"UPDATE users SET robux = '$newcreatormoney' WHERE id = '{$creator['id']}'") or die(mysqli_error($conn));
			$moneyq = mysqli_query($conn,"UPDATE users SET robux = '$robux' WHERE id = '{$_USER['id']}'") or die(mysqli_error($conn));
			$type = $row['type'];
			$itemq = mysqli_query($conn,"INSERT INTO owned_items (itemid,ownerid,type) VALUES ('$id', '{$_USER['id']}', '$type')") or die(mysqli_error($conn));
			echo "<p style='color:green'>Successfully purchased ".$row['name']." From ".$creator['username'].".</p>";
			header("Location: /Item.aspx?ID=". $id);
		}else{
			die("Offline.");
		}
	}else{
		echo "<p style='color:red'>You don't have enough funds.</p>";
	}
	}
}*/

if(isset($_POST['buybux'])){
    if($owned == "no"){
	if($row['sale'] == 1){
		
	$checklatestbuyq = mysqli_query($conn, "SELECT * FROM owned_items WHERE itemid='".$row['id']."' AND ownerid='".$_USER['id']."' ORDER by id DESC LIMIT 1") or die(mysqli_error($conn));
	
	if(mysqli_num_rows($checklatestbuyq) == 1){
		$latestbuy = mysqli_fetch_assoc($checklatestbuyq);
		
		$timelast = strtotime($latestbuy['time_purchased']);
		$timeout = $latestbuy['time_purchased_timeout'];
		
		if(time() <= $timeout){
			echo "You're being rate limited.";
			exit;
		}
	}
		
	if($logged == "no"){
		header("Location: /Login/Default.aspx");
	}
	$type = $row['buywith'];
		$money = $_USER['robux'];
	
	if($money >= $pricebux){
	        if($pricebux < 1) {
	            $robux = $money;
	        } else {
			    $robux = $money - $pricebux;
	        }
			$tenPercent = round($pricebux * 0.10);
			$newcreatormoney = $creator['robux'] + ($pricebux - $tenPercent);
			$giveownermoneyq = mysqli_query($conn,"UPDATE users SET robux = '$newcreatormoney' WHERE id = '{$creator['id']}'") or die(mysqli_error($conn));
			$moneyq = mysqli_query($conn,"UPDATE users SET robux = '$robux' WHERE id = '{$_USER['id']}'") or die(mysqli_error($conn));
			$type = $row['type'];
			$timeouttime = time() + 15;
			$itemq = mysqli_query($conn,"INSERT INTO owned_items (itemid,ownerid,type,time_purchased_timeout) VALUES ('$id', '{$_USER['id']}', '$type','$timeouttime')") or die(mysqli_error($conn));
			echo "<p style='color:green'>Successfully purchased ".$row['name']." From ".$creator['username'].".</p>";
			header("Location: /Item.aspx?ID=". $id);
	}else{
		echo "<p style='color:red'>You don't have enough funds.</p>";
	}
	}
    }else{
		echo "<p style='color:red'>You already own this item.</p>";
	}
}

if(isset($_POST['buytix'])){
    if($owned == "no"){
	if($row['sale'] == 1){
		
	$checklatestbuyq = mysqli_query($conn, "SELECT * FROM owned_items WHERE itemid='".$row['id']."' AND ownerid='".$_USER['id']."' ORDER by id DESC LIMIT 1") or die(mysqli_error($conn));
	
	if(mysqli_num_rows($checklatestbuyq) == 1){
		$latestbuy = mysqli_fetch_assoc($checklatestbuyq);
		
		$timelast = strtotime($latestbuy['time_purchased']);
		$timeout = $latestbuy['time_purchased_timeout'];
		
		if(time() <= $timeout){
			echo "You're being rate limited.";
			exit;
		}
	}
		
	if($logged == "no"){
		header("Location: /Login/Default.aspx");
	}
	$type = $row['buywith'];
		$money = $_USER['tix'];
	
	if($money >= $pricetix){
			if($pricetix < 1) {
	            $robux = $money;
	        } else {
			    $robux = $money - $pricetix;
	        }
			$tenPercent = round($pricetix * 0.10);
			$newcreatormoney = $creator['tix'] + ($pricetix - $tenPercent);
			$giveownermoneyq = mysqli_query($conn,"UPDATE users SET tix = '$newcreatormoney' WHERE id = '{$creator['id']}'") or die(mysqli_error($conn));
			$moneyq = mysqli_query($conn,"UPDATE users SET tix = '$robux' WHERE id = '{$_USER['id']}'") or die(mysqli_error($conn));
			$type = $row['type'];
			$timeouttime = time() + 15;
			$itemq = mysqli_query($conn,"INSERT INTO owned_items (itemid,ownerid,type,time_purchased_timeout) VALUES ('$id', '{$_USER['id']}', '$type','$timeouttime')") or die(mysqli_error($conn));
			echo "<p style='color:green'>Successfully purchased ".$row['name']." From ".$creator['username'].".</p>";
			header("Location: /Item.aspx?ID=". $id);
	}else{
		echo "<p style='color:red'>You don't have enough funds.</p>";
	}
	}
}else{
		echo "<p style='color:red'>You already own this item.</p>";
	}
}
if($_USER['administrator'] == "yes"){
if(isset($_POST['Delete'])){
	$item = $_POST['Delete'];
	
	$deleteq = mysqli_query($conn,"DELETE FROM catalog_comments WHERE id = '$item';") or die(mysqli_error($conn));
}
}
?>
<title> <?=$row['name'] ?> by <?=$creator['username'] ?> - emeraldnews <?php 
    if($row['type'] == "decals") {
        echo 'Decals';
    } elseif ($row['type'] == "tshirt") {
        echo 'T-Shirts';
    } else {
        echo ucfirst($row['type']) . 's';
    } 
?></title>

<div id="Body">
    <link id="ctl00_Imports" rel="stylesheet" type="text/css" href="/CSS/Tabs.css?v=<?=time();?>"/>
<style>
#ItemContainer #Item {
    background-color: #eee;
    border: solid 1px #555;
    color: #555;
    float: left;
    font-family: Verdana, Sans-Serif;
    width: 725px;
	padding: 0;
}

#ItemContainer #Details{
	padding: 10px
}
#ItemContainer #Ownership {
    background-color: #ccc;
    border: dashed 1px #f00;
    clear: right;
    color: #f00;
    float: right;
    margin-left: 10px;
    margin-top: 0;
    padding: 10px 10px;
    text-align: center;
    width: 249px;
}
#ItemContainer h2 {
    background-color: #ccc;
    border-bottom: solid 1px #555;
    color: #333;
    font-family: Comic Sans MS,Sans-Serif;
    font-size: x-large;
    margin: 0;
    text-align: center;
}
#ItemContainer #Summary {
    background-color: #fff;
    border: dashed 1px #555;
    float: right;
    padding: 7px;
    width: 255px;
}
#ItemContainer #Summary #ReportAbuse {
    margin: 0 auto;
    padding: 4px;
    text-align: center;
}
#ItemContainer #Summary #Description {
    border: solid 1px #555;
    font: normal 1em/normal Verdana, sans-serif;
    max-height: 136px;
    line-height: 1.7em;
    padding: 4px;
    overflow: auto;
    text-align: left;
    width: 249px;
}
#ItemContainer #Actions, #ItemContainer #Actions_Place {
    background-color: #fff;
    border-bottom: dashed 1px #555;
    border-left: dashed 1px #555;
    border-right: dashed 1px #555;
    clear: left;
    float: left;
    padding: 5px;
    text-align: center;
    min-width: 0;
    position: relative;
}
#ItemContainer #Actions {
    width: 240px;
}
</style>
<form method="POST" action="">
<div id="ItemContainer">
  <div id="Item">
    <h2><?=$ep->remove($row['name'])?></h2>
    <div id="Details">
      <div id="Thumbnail">
        <a title="<?=$ep->remove($row['name'])?>" style="display:inline-block;height:250px;width:250px;"><img src="/Thumbs/Asset.ashx?assetId=<?=(int)$row['id']?>" border="0" id="img" alt="<?=$ep->remove($row['name'])?>" style="display:inline-block;height:250px;width:250px;"></a>
      </div>
      <div id="Summary">
        <h3>&nbsp;emeraldnews <?php if($row['type'] == "decals") {echo 'Decal';} else { echo ucfirst($row['type']);} ?></h3>
		<?php if($row['sale'] == 1 && $owned == "no"){ if($row['price'] > 0){ ?>
                <div id="<?php if($row['buywith'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>Purchase">
          <div id="PriceIn<?php if($row['buywith'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>"><?php if($row['buywith'] == "tix"){ echo "Tx"; }else{ echo "F$"; } ?>: <?=(int)$row['price']?></div>
          <div id="BuyWith<?php if($row['buywith'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>">
            <a <?php if($logged == "yes"){ ?>onclick=";showPurchaseDiag(<?php if($row['buywith'] == "tix"){ echo "0"; }else{ echo "1"; } ?>);"<?php }else{ ?>href="/Login/Default.aspx"<?php } ?> class="Button">Buy with <?php if($row['buywith'] == "tix"){ echo "Tx"; }else{ echo "F$"; } ?></a>
          </div>
        </div>
        <br><br><?php if($row['price2'] > 0){ ?>
                <div id="<?php if($row['buywith2'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>Purchase">
          <div id="PriceIn<?php if($row['buywith2'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>"><?php if($row['buywith2'] == "tix"){ echo "Tx"; }else{ echo "F$"; } ?>: <?=(int)$row['price2']?></div>
          <div id="BuyWith<?php if($row['buywith2'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>">
            <a <?php if($logged == "yes"){ ?>onclick=";showPurchaseDiag(<?php if($row['buywith2'] == "tix"){ echo "0"; }else{ echo "1"; } ?>);"<?php }else{ ?>href="/Login/Default.aspx"<?php } ?> class="Button">Buy with <?php if($row['buywith2'] == "tix"){ echo "Tx"; }else{ echo "F$"; } ?></a>
          </div>
        </div>
        <br><br><?php } ?><?php }elseif($row['price2'] > 0){ ?>
                <div id="<?php if($row['buywith2'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>Purchase">
          <div id="PriceIn<?php if($row['buywith2'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>"><?php if($row['buywith2'] == "tix"){ echo "Tx"; }else{ echo "F$"; } ?>: <?=(int)$row['price2']?></div>
          <div id="BuyWith<?php if($row['buywith2'] == "tix"){ echo "Tickets"; }else{ echo "Robux"; } ?>">
            <a <?php if($logged == "yes"){ ?>onclick=";showPurchaseDiag(<?php if($row['buywith2'] == "tix"){ echo "0"; }else{ echo "1"; } ?>);"<?php }else{ ?>href="/Login/Default.aspx"<?php } ?> class="Button">Buy with <?php if($row['buywith2'] == "tix"){ echo "Tx"; }else{ echo "F$"; } ?></a>
          </div>
        </div>
        <br><br><?php }else{ ?><div id="PublicDomainPurchase">
          <div id="PricePublicDomain">Free</div>
          <div id="BuyForFree">
            <a onclick="showPurchaseDiag(0);" class="Button">Take One!</a>
          </div>
        </div><?php }} ?>
             <div id="Creator">
  <a href="/User.aspx?ID=<?=(int)$creator['id']?>" title="<?=$creator['username']?>">
    <br>
    <img src="/Thumbs/Avatar.ashx?assetId=<?=(int)$creator['id']?>&isSmall=1">
    <br>
    <span style="color:#555;">Creator:</span> <?=$creator['username']?>
  </a>
</div>
        <div id="LastUpdate">Updated: <?=context::updated($row['creation_date'])?></div>
        <div id="Favourites">Favorited: <?=$totalfavorite?> times</div>
                <div>
          <div id="DescriptionLabel">Description:</div>
          <div id="Description"><?=$ep->remove($row['description'])?></div>
        </div>
                <div id="ReportAbuse">
          <div class="ReportAbusePanel">
            <span class="AbuseIcon"><a href="/report/?id=<?=(int)$row['id']?>&amp;type=2"><img src="/images/abuse.gif" alt="Report Abuse" style="border-width:0px;"></a></span>
            <span class="AbuseButton"><a href="/report/?id=<?=(int)$row['id']?>&amp;type=2">Report Abuse</a></span>
          </div>
        </div>
      </div>
      <div id="Actions">
                <?php if($favorited == false) { echo '<a href="#" onclick="favorite()" id="favoriteButton">Favorite</a>';}else{echo '<a disabled="disabled">Favorite</a>';}?>
              </div>
			  <?php if($_USER['administrator'] == "yes" || $row['creatorid'] == $_USER['id']){ ?>
			  <div id="Configuration" style="
    background-color: #fff;
    border-bottom: dashed 1px #555;
    border-left: dashed 1px #555;
    border-right: dashed 1px #555;
    float: right;
    clear: right;
    font: normal 1em/normal Verdana,sans-serif;
    line-height: 1.7em;
    margin-left: 10px;
    padding: 5px 10px;
    position: relative;
    text-align: center;
    width: 249px;
">
        <a href="/my/Item.aspx?ID=<?=(int)$row['id']?>">Edit <?php if($row['type'] == "decals") {echo 'Decal';} else { echo ucfirst($row['type']);} ?></a>
			  </div><?php } ?>
			  <?php if($owned == "yes"){ ?>
            <div id="Ownership">
        You own this item
      </div>
			  <?php } ?>

            <div style="clear: both;"></div>
    </div>
        <div style="margin: 10px;">
      <div class="ajax__tab_xp ajax__tab_container ajax__tab_default" id="TabbedInfo">
        <div id="TabbedInfo_header" class="ajax__tab_header">
                    <span id="__tab_TabbedInfo_CommentaryTab" class="ajax__tab ajax__tab_active">
            <span class="ajax__tab_outer"><span class="ajax__tab_inner"><a class="ajax__tab_tab ajax__tab" id="__tab_TabbedInfo_CommentaryTab" href="#" style="text-decoration:none;"><h3>Commentary</h3></a></span></span>
          </span>
                  </div>
        <div id="TabbedInfo_body" class="ajax__tab_body">
                    <div id="TabbedInfo_CommentaryTab" class="ajax__tab_panel">
            <div id="TabbedInfo_CommentaryTab_CommentsPane_CommentsUpdatePanel">
              <div class="CommentsContainer" id="CommentsContainer">
            </div>
          </div>
                  </div>
      </div>
    </div>
      </div>
	  </div>
  <div class="Ads_WideSkyscraper">
      </div>
  <div style="clear: both;"></div>
  <?php if($logged == "yes" && $owned == "no"){ 
  
  ?>
    <div id="itemPurchaseFade" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(100,100,100,0.25);">
    <div id="itemPurchase" class="anim" style="max-width: 325px; position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);">
      <div style="background-color: #FFFFE0; border:3px solid gray; box-shadow: black 5px 5px;">
	  <div id="VerifyPurchaseBux" style="margin: 1.5em; display:none;">
          <h3>Purchase Item:</h3>
          <br>
          <p>Would you like to purchase <?=ucfirst($row['type'])?> <?=$ep->remove($row['name'])?> from <?=$ep->remove($creator['username'])?> for F$: <?=$pricebux?>?</p>
          <p>Your balance after this purchase will be F$: <?=$_USER['robux'] - $pricebux ?>.</p>
          <br>
          <input type="submit" name="buybux" value="Buy Now!" class="MediumButton" style="width:100%;">
          <br><br>
          <input type="button" value="Cancel" onclick="$('#itemPurchaseFade').hide();" class="MediumButton" style="width:100%;" />
        </div>
		<div id="itemPurchaseFade" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(100,100,100,0.25);">
    <div id="itemPurchase" class="anim" style="max-width: 325px; position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);">
      <div style="background-color: #FFFFE0; border:3px solid gray; box-shadow: black 5px 5px;">
                <div id="VerifyPurchaseBux" style="margin: 1.5em; display:none;">
          <h3>Purchase Item:</h3>
          <br>
          <p>Would you like to purchase <?=ucfirst($row['type'])?> <?=$ep->remove($row['name'])?> from <?=$ep->remove($creator['username'])?> for F$: <?=$pricebux?>?</p>
          <p>Your balance after this purchase will be F$: <?=$_USER['robux'] - $pricebux?>.</p>
          <br>
          <input type="submit" name="buybux" value="Buy Now!" class="MediumButton" style="width:100%;">
          <br><br>
          <input type="button" value="Cancel" onclick="$('#itemPurchaseFade').hide();" class="MediumButton" style="width:100%;" />
        </div>
        <div id="VerifyPurchaseBuxIn" style="margin: 1.5em;">
          <h3>Insufficient Funds</h3>
          <p>You need <?=$pricebux - $_USER['robux']?> more F$ to purchase this item.</p>
          <p>                    <input type="button" value="Cancel" onclick="$('#itemPurchaseFade').hide();" class="MediumButton" style="width:100%;" /></p>
        </div>
        <div id="ProcessPurchase" style="padding-left:50px; padding-right:50px; margin: 2.5em auto; display: none;">
          <div id="Processing" style="margin: 0 auto; text-align: center; vertical-align: middle;">
            <img src="/images/ProgressIndicator2.gif" align="middle" style="border-width:0px;">&nbsp;&nbsp;
            Processing transaction ...
          </div>
        </div>
                <div id="PurchaseMessage" style="margin: 1.5em; display: none;">
        </div>
      </div>
    </div>
  </div>
                <div id="VerifyPurchaseTix" style="margin: 1.5em;">
          <h3>Purchase Item:</h3>
          <br>
          <p>Would you like to purchase <?=ucfirst($row['type'])?> <?=$ep->remove($row['name'])?> from <?=$ep->remove($creator['username'])?> for Tx: <?=$pricetix?>?</p>
          <p>Your balance after this purchase will be Tx: <?=$_USER['tix'] - $pricetix?>.</p>
          <br>
          <input type="submit" name="buytix" value="Buy Now!" class="MediumButton" style="width:100%;">
          <br><br>
          <input type="button" value="Cancel" onclick="$('#itemPurchaseFade').hide();" class="MediumButton" style="width:100%;" />
        </div>
        <div id="VerifyPurchaseTixIn" style="margin: 1.5em; display:none;">
          <h3>Insufficient Funds</h3>
          <p>You need <?=$pricetix - $_USER['tix']?> more Tx to purchase this item.</p>
          <input type="button" value="Cancel" onclick="$('#itemPurchaseFade').hide();" class="MediumButton" style="width:100%;" />
        </div>
                <div id="PurchaseMessage" style="margin: 1.5em; display: none;">
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>
</form>
<script>
  var currency;
  var suffTix = true;
  var suffBux = true;
  function showPurchaseDiag(currencyA) {
    $("#VerifyPurchaseTix").hide();
    $("#VerifyPurchaseBux").hide();
    $("#VerifyPurchaseTixIn").hide();
    $("#VerifyPurchaseBuxIn").hide();
    $("#ProcessPurchase").hide();
    $("#PurchaseMessage").hide();
    currency = currencyA
    $("#itemPurchaseFade").show();
    if(currency == 0) {
      if (suffTix) {
        $("#VerifyPurchaseTix").show();
      } else {
        $("#VerifyPurchaseTixIn").show();
      }
    } else {
      if (suffBux) {
        $("#VerifyPurchaseBux").show();
      } else {
        $("#VerifyPurchaseBuxIn").show();
      }
    }
  }
</script>
<script>
function getComments(page, item) 
    {
		if (page == undefined){ page = 1; }
        $.post("/api/items/getCommentsItem", {page:page,item:item}, function(data) 
        {
        	$("#CommentsContainer").html("");
        	$("#CommentsContainer").html(data);
        })
        .fail(function() 
        {
        	$("#CommentsContainer").html("");
        	$("#CommentsContainer").html("Failed to get comments");
        });
    }
	<?php if($logged == "yes"){ ?>
	function Comment(item)
	{
		var content = document.getElementById("comment").value;
        $.post("/api/items/CommentItem", {content:content,item:item}, function(data) 
        {
        	if(data == "Success")
			{
				getComments(1, <?=$id?>)
			}
			else{
				$("#CommentsContainer").html("");
				$("#CommentsContainer").html(data);
			}
        })
        .fail(function() 
        {
        	$("#CommentsContainer").html("");
        	$("#CommentsContainer").html("Failed to comment");
        });
	}
	function favorite() {
        var id = '<?php echo $id ?>';
        var link = document.getElementById("favoriteButton");
        
        fetch(`/api/Favorites/FavoriteItem.php?id=${id}`, {
            method: 'POST',
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('gra');
            }
            console.log('favorited');
            const newlink = document.createElement("p");
            newlink.textContent = "Favorite";
            newlink.style.marginTop = "0px";
            newlink.style.marginBottom = "0px";
    
            link.parentNode.replaceChild(newlink, link);
        })
        .catch(error => {
            console.error('grrr:', error);
        });
    }
	<?php } ?>
</script>
<script>
function getcomento() 
{
    getComments(1,<?=$id?>);
};
getcomento()
</script>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; }} else {header('location: /Error.aspx');} ?>
<title><?=$row['name']?> by <?=$creator['username']?></title>


