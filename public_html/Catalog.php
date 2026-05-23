<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$searchusername = $_GET['q'] ?? "";
$searchusername = mysqli_real_escape_string($conn, $searchusername);

$category = (int)$_GET['c'];

if(!isset($_GET['m'])){	
	$m = "RecentlyUpdated";
}elseif($_GET['m'] == "RecentlyUpdated" || $_GET['m'] == "TopFavorites" || $_GET['m'] == "BestSelling" || $_GET['m'] == "ForSale"){	
	$m = $_GET['m'];
}else{
	$m = "RecentlyUpdated";
}
			
			if($category == 2){
				$categoryName = "tshirt";
			}elseif($category == 69){
				$categoryName = "head";
			}elseif($category == 11){
				$categoryName = "shirt";
			}elseif($category == 12){
				$categoryName = "pants";
			}elseif($category == 8){
				$categoryName = "hat";
			}elseif($category == 5){
				$categoryName = "face";
			}elseif($category == 10){
				$categoryName = "model";
			}elseif($category == 13){
				$categoryName = "place";
			}elseif($category == 14){
				$categoryName = "decals";
			}else{
				$categoryName = "hat";
				$category = 8;
			}
			
			$resultsperpage = 20;
                    $check = mysqli_query($conn, "SELECT * FROM catalog WHERE type = '$categoryName' AND name LIKE '%$searchusername%'");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    if(!isset($_GET['p'])) {
                        $page = 1;
                    }else{
                        $page = (int)$_GET['p'];
                    }

                    $thispagefirstresult = ($page-1)*$resultsperpage;

?>
<title>emeraldnews - Catalog</title> 
<div id="Body">
					
    
    

<div id="CatalogContainer">
<div id="SearchBar" class="SearchBar">
    <form style="display:inline-block" action="Catalog.aspx" method="GET">
        <span class="SearchBox"><input name="q" type="text" maxlength="100" class="TextBox" value="<?=$searchusername?>"></span>
        <span class="SearchButton"><input type="submit" value="Search"></span>
        <input type="hidden" name="c" value="<?=$category?>">
    </form>
						  <span class="SearchLinks"><sup><a href="/Catalog.aspx">Reset</a>&nbsp;<!--|&nbsp;</sup><a href="#"><sup>Tips</sup>
							<span>Exact Phrase: "red brick"<br/>
							Find ALL Terms: red and brick =OR=  red + brick<br/>
							Find ANY Term: red or brick =OR= red | brick<br/>
							Wildcard Suffix: tel* (Finds teleport, telamon, telephone, etc.)<br/>
							Terms Near each other: red near brick =OR= red ~ brick<br/>
							Excluding Terms: red and not brick =OR= red - brick<br/>
							Grouping operations: brick and (red or blue) =OR= brick + (red | blue)<br/>
							Combinations: "red brick" and not (tele* or tower) =OR= "red brick" - (tele* | tower)<br/>
							Wildcard Prefix is NOT supported: *port will not find teleport, airport, etc.
							</span></a-->
						  </sup></span> 
						</div>
						<div class="SearchError"></div>
    <div class="DisplayFilters">
	    <h2>Catalog</h2>
	    <div id="BrowseMode">
	        <h4><a href="/Upgrades/emeraldnews.aspx">Buy emeraldnews!</a></h4>
			<h4><a href="/my/accountbalance/trade">Trade Currency!</a></h4>
		    <h4>Browse</h4>
		    <ul>
		        <?php if($m=="TopFavorites"){ ?><li><img id="ctl00_cphRoblox_rbxCatalog_BrowseModeTopFavoritesBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeTopFavoritesSelector" href="Catalog.aspx?m=TopFavorites&amp;c=8&amp;t=PastWeek&amp;d=All"><b>Top Favorites</b></a></li><?php }else{ ?><li><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeTopFavoritesSelector" href="Catalog.aspx?m=TopFavorites&amp;c=<?=$category?>">Top Favorites</a></li><?php } ?>
		        <?php if($m=="BestSelling"){ ?><li><img id="ctl00_cphRoblox_rbxCatalog_BrowseModeBestSellingBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeBestSellingSelector" href="Catalog.aspx?m=BestSelling&amp;c=8&amp;t=PastWeek&amp;d=All"><b>Best Selling</b></a></li><?php }else{ ?><li><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeBestSellingSelector" href="Catalog.aspx?m=BestSelling&amp;c=<?=$category?>">Best Selling</a></li><?php } ?>
		        <?php if($m=="RecentlyUpdated"){ ?><li><img id="ctl00_cphRoblox_rbxCatalog_BrowseModeRecentlyUpdatedBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeRecentlyUpdatedSelector" href="Catalog.aspx?m=RecentlyUpdated&amp;c=8"><b>Recently Updated</b></a></li><?php }else{ ?><li><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeRecentlyUpdatedSelector" href="Catalog.aspx?m=RecentlyUpdated&amp;c=<?=$category?>">Recently Updated</a></li><?php } ?>
			    <?php if($m=="ForSale"){ ?><li><img id="ctl00_cphRoblox_rbxCatalog_BrowseModeForSaleBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeForSaleSelector" href="Catalog.aspx?m=ForSale&amp;c=8&amp;d=All"><b>For Sale</b></a></li><?php }else{ ?><li><a id="ctl00_cphRoblox_rbxCatalog_BrowseModeForSaleSelector" href="Catalog.aspx?m=ForSale&amp;c=<?=$category?>">For Sale</a></li><?php } ?>
		    </ul>
	    </div>
	    <div id="Category">
		    <h4>Category</h4>
		    
				    <ul>
				        <li>
					    <?php if($category == 69){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=69"><b>Heads</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=69">Heads</a>
						<?php } ?>
				    </li>
			        <li>
					    <?php if($category == 5){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=5"><b>Faces</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=5">Faces</a>
						<?php } ?>
				    </li>
				    
				    <li>
				     <?php if($category == 8){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=8"><b>Hats</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=8">Hats</a>
						<?php } ?>
				    </li>
				    
				    <li>
					    <?php if($category == 2){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=2"><b>T-Shirts</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=2">T-Shirts</a>
						<?php } ?>
				    </li>
			    
				    <li>
					    <?php if($category == 11){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=11"><b>Shirts</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=11">Shirts</a>
						<?php } ?>
				    </li>
			    
				    <li>
					    <?php if($category == 12){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=12"><b>Pants</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=12">Pants</a>
						<?php } ?>
				    </li>
			        
			        <li>
					    
					    <?php if($category == 14){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=14"><b>Decals</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=14">Decals</a>
						<?php } ?>
				    </li>
			        
				    <li>
					    
					    <?php if($category == 10){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=10"><b>Models</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=10">Models</a>
						<?php } ?>
				    </li>
				    <li>
					    
					    <?php if($category == 13){ ?>
					    <img id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_SelectedCategoryBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=13"><b>Places</b></a>
						<?php }else{ ?>
					    <a id="ctl00_cphRoblox_rbxCatalog_AssetCategoryRepeater_ctl04_AssetCategorySelector" href="Catalog.aspx?m=<?=$m?>&amp;c=13">Places</a>
						<?php } ?>
				    </li>
			    
				    </ul>
			    
	    </div>
    </div>
    <div class="Assets">
        <span id="ctl00_cphRoblox_rbxCatalog_AssetsDisplaySetLabel" class="AssetsDisplaySet"><?php if($m=="TopFavorites"){ ?>Top Favorites<?php }elseif($m=="BestSelling"){ ?>Best Selling<?php }elseif($m=="RecentlyUpdated"){ ?>Recently Updated<?php }elseif($m=="ForSale"){ ?>For Sale<?php } ?> <?=capitalizeAndPluralize($categoryName)?></span>
	    <div id="ctl00_cphRoblox_rbxCatalog_HeaderPagerPanel" class="HeaderPager">
		    
		    <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page <?=$page?> of <?=$numberofpages?></span>
			<?php if($page > 1){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Catalog.aspx?p=<?=$page-1?><?php if(isset($_GET['m'])){ ?>&m=<?=$m?><?php } ?><?php if(isset($_GET['c'])){ ?>&c=<?=$category?><?php } ?>"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a><?php } ?>
            <?php if($page < $numberofpages){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Catalog.aspx?p=<?=$page+1?><?php if(isset($_GET['m'])){ ?>&m=<?=$m?><?php } ?><?php if(isset($_GET['c'])){ ?>&c=<?=$category?><?php } ?>">Next <span class="NavigationIndicators">&gt;&gt;</span></a><?php } ?>
	    </div>
	    <table id="ctl00_cphRoblox_rbxCatalog_AssetsDataList" cellspacing="0" align="Center" border="0" width="735">
	<tr>
		<?php
			
			if($m=="RecentlyUpdated"){
            $sql = "SELECT * FROM catalog WHERE type = '$categoryName' AND name COLLATE armscii8_general_ci LIKE '%$searchusername%' AND pending = 0 ORDER by creation_date DESC LIMIT ".$thispagefirstresult.",".$resultsperpage;
			}elseif($m=="BestSelling"){
			$sql = "SELECT catalog.*, COUNT(owned_items.id) AS total_rows
        FROM catalog
        LEFT JOIN owned_items ON catalog.id = owned_items.itemid
		WHERE catalog.type = '$categoryName' AND catalog.name LIKE '%$searchusername%' AND catalog.pending = 0
        GROUP BY catalog.id
        ORDER BY total_rows DESC
        LIMIT ".$thispagefirstresult.",".$resultsperpage;	
			}elseif($m=="ForSale"){
			$sql = "SELECT * FROM catalog WHERE type = '$categoryName' AND name COLLATE armscii8_general_ci LIKE '%$searchusername%' AND sale = 1 ORDER by creation_date DESC LIMIT ".$thispagefirstresult.",".$resultsperpage;	
			}elseif($m=="TopFavorites"){
			$sql = "SELECT catalog.*, COUNT(catalog_favorites.id) AS total_rows
        FROM catalog
        LEFT JOIN catalog_favorites ON catalog.id = catalog_favorites.item
		WHERE catalog.type = '$categoryName' AND catalog.name LIKE '%$searchusername%' AND catalog.pending = 0
        GROUP BY catalog.id
        ORDER BY total_rows DESC
        LIMIT ".$thispagefirstresult.",".$resultsperpage;	
			}else{
			$sql = "";
			}
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $counter = 0;
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $creatorq = mysqli_query($conn, "SELECT * FROM users WHERE id='".$row['creatorid']."'") or die(mysqli_error($conn));
                  $creator = mysqli_fetch_assoc($creatorq);
				  $totalsold = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM owned_items WHERE itemid = '{$row['id']}'"));
				  $totalfavorite = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM catalog_favorites WHERE item = '{$row['id']}'"));
				  $updated = context::updated($row['creation_date']);
                  $fakeTd = (4 - $resultCheck);
				  ?>
			<td valign="top">
		        <div class="Asset">
			        <div class="AssetThumbnail">
				        <a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetThumbnailHyperLink" title="<?=$ep->remove($row['name'])?>" href="/Item.aspx?ID=<?=(int)$row['id']?>" style="display:inline-block;cursor:pointer;"><img width="120" src="/Thumbs/Asset.ashx?assetId=<?=(int)$row['id']?>&isSmall=1" border="0" alt="<?=$ep->remove($row['name'])?>" blankurl="http://t6.roblox.com:80/blank-120x120.gif"/></a>
			        </div>
			        <div class="AssetDetails">
				        <div class="AssetName"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_AssetNameHyperLink" href="/Item.aspx?ID=<?=(int)$row['id']?>"><?=$ep->remove($row['name'])?></a></div>
				        <div class="AssetLastUpdate"><span class="Label">Updated:</span> <span class="Detail"><?=$updated?></span></div>
				        <div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxCatalog_AssetsDataList_ctl00_CreatorHyperLink" href="/User.aspx?ID=<?=(int)$creator['id']?>"><?=$ep->remove($creator['username'])?></a></span></div>
				        <div class="AssetsSold"><span class="Label">Number Sold:</span> <span class="Detail"><?=$totalsold?></span></div>
				        <div class="AssetFavorites"><span class="Label">Favorited:</span> <span class="Detail"><?=$totalfavorite?> times</span></div>
				        <?php if($row['sale'] > 0){ ?><?php if($row['price'] > 0){ ?><div class="AssetPrice"><span class="PriceIn<?php if($row['buywith'] == "tix"){ ?>Tickets<?php }else{ ?>Robux<?php } ?>"><?php if($row['buywith'] == "tix"){ ?>Tx<?php }else{ ?>F$<?php } ?>: <?=number_format($row['price'])?></span></div><?php if($row['price2'] > 0){ ?><div class="AssetPrice"><span class="PriceIn<?php if($row['buywith2'] == "tix"){ ?>Tickets<?php }else{ ?>Robux<?php } ?>"><?php if($row['buywith2'] == "tix"){ ?>Tx<?php }else{ ?>R$<?php } ?>: <?=number_format($row['price2'])?></span></div><?php } ?><?php }elseif($row['price2'] > 0){ ?><div class="AssetPrice"><span class="PriceIn<?php if($row['buywith2'] == "tix"){ ?>Tickets<?php }else{ ?>Robux<?php } ?>"><?php if($row['buywith2'] == "tix"){ ?>Tx<?php }else{ ?>F$<?php } ?>: <?=number_format($row['price2'])?></span></div><?php }else{ ?><div class="AssetPrice">
									<span class="PriceInTickets" style="color:blue;">Free</span>
						</div><?php }} ?>
				        
			        </div>
			    </div>
			</td>
			<?php $counter++; if($counter == 5) {echo'</tr><tr>'; $counter = 0;} if($counter == $resultCheck) {if($fakeTd > 0) {$counter2 = 0; while($counter2 < $fakeTd + 1) {echo '<td valign="top"><div class="Asset">
			        <div class="AssetThumbnail" style="display:none;">
			        </div>
			        <div class="AssetDetails">
			        </div>
			    </div></td>'; $counter2++;}}}}}else{ echo "No results found."; } ?>
	</tr>
</table>
        <div id="ctl00_cphRoblox_rbxCatalog_FooterPagerPanel" class="HeaderPager">
            
            <span id="ctl00_cphRoblox_rbxCatalog_FooterPagerLabel">Page <?=$page?> of <?=$numberofpages?></span>
			<?php if($page > 1){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Catalog.aspx?p=<?=$page-1?><?php if(isset($_GET['m'])){ ?>&m=<?=$m?><?php } ?><?php if(isset($_GET['c'])){ ?>&c=<?=$category?><?php } ?>"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a><?php } ?>
            <?php if($page < $numberofpages){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Catalog.aspx?p=<?=$page+1?><?php if(isset($_GET['m'])){ ?>&m=<?=$m?><?php } ?><?php if(isset($_GET['c'])){ ?>&c=<?=$category?><?php } ?>">Next <span class="NavigationIndicators">&gt;&gt;</span></a><?php } ?>
        </div>
    </div>
    <div style="clear: both;"/>
</div>

				</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


