

<?php

require $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

$uid = (int)$_POST['uid'];
$home = $_POST['home'];

if(!isset($_POST['page']) || (int)$_POST['page'] < 1) {
                        $page = (int)1;
                    }else{
                        $page = (int)$_POST['page'];
                    }
					
					if(!isset($_POST['type']) || (int)$_POST['type'] < 1) {
                        $type = (int)1;
                    }else{
                        $type = (int)$_POST['type'];
                    }

					
			
					if($type == 2){
						$categoryName = "tshirt";
					}elseif($type == 5){
						$categoryName = "shirt";
					}elseif($type == 8){
						$categoryName = "head";
					}elseif($type == 6){
						$categoryName = "pants";
					}elseif($type == 7){
						$categoryName = "face";
					}elseif($type == 1){
						$categoryName = "hat";
					}elseif($type == 4){
						$categoryName = "decals";
					}elseif($type == 3){
						$categoryName = "model";
					}else{
						$categoryName = "hat";
						$type = 5;
					}
if($home == true)echo '<font size="small">
    <div style="margin: 0 auto; width: 100px;text-align:center">
        <a href="/Catalog.aspx">Shop</a>
            </div>
</font>
<table cellspacing="0" border="0">
<tbody>
<tr>'; if($home == false) {
    if($categoryName == "tshirt") {
        echo '<font size="small"><div style="margin: 0 auto; width: 100px;text-align:center">
        <a href="/Catalog.aspx?c=2">Shop</a>
         
        &nbsp;&nbsp;<a href="/my/character/upload/?type=0">Create</a> 
            </div></font>
<table cellspacing="0" border="0">
<tbody>
<tr>';
    } elseif($categoryName == "shirt") {
        echo '<font size="small"><div style="margin: 0 auto; width: 100px;text-align:center">
        <a href="/Catalog.aspx?c=11">Shop</a>
         
        &nbsp;&nbsp;<a href="/my/character/upload/?type=1">Create</a> 
            </div></font>
<table cellspacing="0" border="0">
<tbody>
<tr>';
    } elseif($categoryName == "pants") {
        echo '<font size="small"><div style="margin: 0 auto; width: 100px;text-align:center">
        <a href="/Catalog.aspx?c=12">Shop</a>
         
        &nbsp;&nbsp;<a href="/my/character/upload/?type=2">Create</a> 
            </div></font>
<table cellspacing="0" border="0">
<tbody>
<tr>';
    } elseif($categoryName == "decals") {
        echo '<font size="small"><div style="margin: 0 auto; width: 100px;text-align:center">
        <a href="/Catalog.aspx?c=12">Shop</a>
         
        &nbsp;&nbsp;<a href="/my/character/upload/?type=3">Create</a> 
            </div></font>
<table cellspacing="0" border="0">
<tbody>
<tr>';
    } else {
        echo '<font size="small">
    <div style="margin: 0 auto; width: 100px;text-align:center">
        <a href="/Catalog.aspx">Shop</a>
            </div>
</font>
<table cellspacing="0" border="0">
<tbody>
<tr>';
    }
}
$resultsperpage = 15;
                    $check = mysqli_query($conn, "SELECT * FROM owned_items WHERE ownerid = '$uid' AND type = '$categoryName'");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    $thispagefirstresult = ($page-1)*$resultsperpage;

                    $check = mysqli_query($conn, "SELECT * FROM owned_items WHERE ownerid = '$uid' AND type = '$categoryName' ORDER BY id DESC LIMIT ".$thispagefirstresult.",".$resultsperpage);
?><div id="ctl00_cphRoblox_rbxCatalog_HeaderPagerPanel" class="HeaderPager">
		    
		    <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page <?=$page?> of <?=$numberofpages?></span>
			<?php if($page > 1){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="javascript:return false;" onclick="getInventory(<?=$type?>,<?=$page-1?>)"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a><?php } ?>
            <?php if($page < $numberofpages){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="javascript:return false;" onclick="getInventory(<?=$type?>,<?=$page+1?>)">Next <span class="NavigationIndicators">&gt;&gt;</span></a><?php } ?>
	    </div><?php
					if($usercount > 0){

                    while($row = mysqli_fetch_assoc($check)) {
						
						$id = $row['itemid'];
						
						$itemq = mysqli_query($conn, "SELECT * FROM catalog WHERE id = '$id'") or die(mysqli_error($conn));
						$item = mysqli_fetch_assoc($itemq);
						
						$name = $ep->remove($item['name']);
						
						$creatorq = mysqli_query($conn, "SELECT * FROM users WHERE id = '{$item['creatorid']}'") or die(mysqli_error($conn));
						$creator = mysqli_fetch_assoc($creatorq);
						
						$wearid = $row['id'];
						$wearq = mysqli_query($conn,"SELECT * FROM wear WHERE item = $wearid AND userid = $uid;") or die(mysqli_error($conn));
						if(mysqli_num_rows($wearq) == 1){
							$weartext = '<div class="fixed" onclick="unwear('.$wearid.')">[ remove ]</div>';
						}else{
							$weartext = '<div class="fixed" onclick="wear('.$wearid.')">[ wear ]</div>';
						}
?>
<td class="Asset" valign="top" style="display:inline-block">
                <div style="padding:5px">
                    <div class="AssetThumbnail" style="overflow:hidden">
                        <a title="<?=$name?>" href="/Item.aspx?ID=<?=$id?>" style="display:inline-block;cursor:pointer;">
                            <img style="height:110px;" src="/Thumbs/Asset.ashx?assetId=<?=$id?>" id="img" alt="<?=$name?>" blankurl="http://t6.roblox.com:80/blank-110x110.gif" border="0">
                        </a>
                    </div>
                    <div class="AssetDetails">
                        <div class="AssetName"><a href="/Item.aspx?ID=<?=$id?>"><?=$name?></a></div>
                        <div class="AssetCreator"><span class="Label">Creator:</span>
                            <span class="Detail"><a href="/User.aspx?ID=<?=$creator['id']?>"><?=$creator['username']?></a></span>
                        </div>
                                                <?php if($item['sale'] > 0){ ?><?php if($item['price'] > 0){ ?><div class="AssetPrice"><span class="PriceIn<?php if($item['buywith'] == "tix"){ ?>Tickets<?php }else{ ?>Robux<?php } ?>"><?php if($item['buywith'] == "tix"){ ?>Tx<?php }else{ ?>F$<?php } ?>: <?=number_format($item['price'])?></span></div><?php if($item['price2'] > 0){ ?><div class="AssetPrice"><span class="PriceIn<?php if($item['buywith2'] == "tix"){ ?>Tickets<?php }else{ ?>Robux<?php } ?>"><?php if($item['buywith2'] == "tix"){ ?>Tx<?php }else{ ?>F$<?php } ?>: <?=number_format($item['price2'])?></span></div><?php } ?><?php }elseif($item['price2'] > 0){ ?><div class="AssetPrice"><span class="PriceIn<?php if($item['buywith2'] == "tix"){ ?>Tickets<?php }else{ ?>Robux<?php } ?>"><?php if($item['buywith2'] == "tix"){ ?>Tx<?php }else{ ?>F$<?php } ?>: <?=number_format($item['price2'])?></span></div><?php }else{ ?><div class="AssetPrice">
									<span class="PriceInTickets" style="color:blue;">Free</span>
						</div><?php }} ?>
                                            </div>
                </div>
            </td>
					<?php }}else{ echo "No results found."; } ?></tr>
			</tbody>
			<table>
			<div id="ctl00_cphRoblox_rbxCatalog_HeaderPagerPanel" class="HeaderPager">
		    
		    <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page <?=$page?> of <?=$numberofpages?></span>
			<?php if($page > 1){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="javascript:return false;" onclick="getInventory(<?=$type?>,<?=$page-1?>)"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a><?php } ?>
            <?php if($page < $numberofpages){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="javascript:return false;" onclick="getInventory(<?=$type?>,<?=$page+1?>)">Next <span class="NavigationIndicators">&gt;&gt;</span></a><?php } ?>
	    </div>


