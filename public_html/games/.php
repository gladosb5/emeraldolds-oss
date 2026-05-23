<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";



if(!isset($_GET['m'])){	
	$m = "MostPopular";
}elseif($_GET['m'] == "RecentlyUpdated" || $_GET['m'] == "TopFavorites" || $_GET['m'] == "MostPopular"){	
	$m = $_GET['m'];
}else{
	$m = "MostPopular";
}

$resultsperpage = 15;
$check = mysqli_query($conn, "SELECT * FROM games");
$usercount = mysqli_num_rows($check);

$numberofpages = ceil($usercount/$resultsperpage);

if(!isset($_GET['p'])) {
    $page = 1;
}else{
    $page = (int)$_GET['p'];
}

$thispagefirstresult = ($page-1)*$resultsperpage;

?>
<div id="Body">
					
    
    <div id="GamesContainer">
        
<div id="ctl00_cphRoblox_rbxGames_GamesContainerPanel">
	
    <div class="DisplayFilters">
	    <h2>News&nbsp;<a id="ctl00_cphRoblox_rbxGames_hlNewsFeed" href="/Games.aspx?feed=rss"><img src="/images/feed-icon-14x14.png" alt="RSS" border="0"></a></h2>
	    <div id="BrowseMode">
		    <h4>Browse</h4>
		    <ul>
			    <li><?php if($m=="MostPopular"){ ?><img id="ctl00_cphRoblox_rbxCatalog_BrowseModeTopFavoritesBullet" class="GamesBullet" src="/images/games_bullet.png" border="0"/><a id="ctl00_cphRoblox_rbxGames_hlMostPopular" href="Games.aspx?m=MostPopular"><b>Most Popular</b></a><?php }else{ ?><a id="ctl00_cphRoblox_rbxGames_hlMostPopular" href="Games.aspx?m=MostPopular">Most Popular</a><?php } ?> <title>  <?php 
        if ($m == "MostPopular") {
            echo "emeraldnews News - Most Popular (Now)";
        } elseif ($m == "TopFavorites") {
            echo "emeraldnews News - Top Favorites (Now)";
        } elseif ($m == "RecentlyUpdated") {
            echo "emeraldnews News - Recently Updated";
        }
        ?></title>		    </ul>
	    </div>
	    
    </div>
    <div id="Games">
        <span id="ctl00_cphRoblox_rbxGames_lGamesDisplaySet" class="GamesDisplaySet"><?php if($m=="TopFavorites"){ ?>Top Favorites<?php }elseif($m=="RecentlyUpdated"){ ?>Recently Updated<?php }elseif($m=="MostPopular"){ ?>Most Popular<?php }else{ ?>Most Popular<?php } ?> News</span>
        <div id="ctl00_cphRoblox_rbxGames_HeaderPagerPanel" class="HeaderPager">
            
	        <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page <?=$page?> of <?=$numberofpages?></span>
			<?php if($page > 1){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Games.aspx?p=<?=$page-1?><?php if(isset($_GET['m'])){ ?>&m=<?=$m?><?php } ?>"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a><?php } ?>
            <?php if($page < $numberofpages){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Games.aspx?p=<?=$page+1?><?php if(isset($_GET['m'])){ ?>&m=<?=$m?><?php } ?>">Next <span class="NavigationIndicators">&gt;&gt;</span></a><?php } ?>
	    </div>
        <table id="ctl00_cphRoblox_rbxGames_dlGames" cellspacing="0" align="Center" border="0" width="550">
		<tbody><tr>
		<?php
			
			if($m=="MostPopular"){
$sql = "SELECT games.*, COALESCE(servers.players, 0) AS players
        FROM games
        LEFT JOIN servers ON games.id = servers.game_id
        ORDER BY players DESC, visits DESC
        LIMIT ".$thispagefirstresult.",".$resultsperpage;

			}elseif($m=="TopFavorites"){
			$sql = "SELECT games.*, COUNT(games_favorites.id) AS total_rows
        FROM games
        LEFT JOIN games_favorites ON games.id = games_favorites.game
        GROUP BY games.id
        ORDER BY total_rows DESC
        LIMIT ".$thispagefirstresult.",".$resultsperpage;	
			}elseif($m=="RecentlyUpdated"){
			$sql = "SELECT * FROM games ORDER by creation_date DESC LIMIT ".$thispagefirstresult.",".$resultsperpage;
			}
			
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
              
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $creatorq = mysqli_query($conn, "SELECT * FROM users WHERE id='".$row['creator_id']."'") or die(mysqli_error($conn));
                  $creator = mysqli_fetch_assoc($creatorq);
				  $totalfavorite = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM games_favorites WHERE game = '{$row['id']}'"));
				  $updated = context::updated($row['creation_date']);
				  
				  $serverq = mysqli_query($conn, "SELECT * FROM servers WHERE game_id='".$row['id']."'") or die(mysqli_error($conn));
                  $server = mysqli_fetch_assoc($serverq);

				  ?>
			<td class="Game" valign="top" style="
    display: inline-block;
    margin-left: 0;
    padding-left: 0;
">
	        <div style="padding-bottom:5px">
		        <div class="GameThumbnail">
			        <a id="ctl00_cphRoblox_rbxGames_dlGames_ctl00_ciGame" title="<?=$ep->remove($row['name'])?>" href="/PlaceItem.aspx?ID=<?=$ep->remove($row['id'])?>" style="display:inline-block;cursor:pointer;"><img src="/Thumbs/PlaceAsset.ashx?assetId=<?=$ep->remove($row['id'])?>&isSmall=1" border="0" alt="test game"></a>
		        </div>
		        <div class="GameDetails">
			        <div class="GameName"><a id="ctl00_cphRoblox_rbxGames_dlGames_ctl00_hlGameName" href="/PlaceItem.aspx?ID=<?=$ep->remove($row['id'])?>"><?=$ep->remove($row['name'])?></a></div>
			        <div class="GameLastUpdate"><span class="Label">Updated:</span> <span class="Detail"><?=$updated?></span></div>
			        <div class="GameCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxGames_dlGames_ctl00_hlGameCreator" href="User.aspx?ID=<?=$ep->remove($creator['id'])?>"><?=$ep->remove($creator['username'])?></a></span></div>
			        <div class="AssetFavorites"><span class="Label">Favorited:</span> <span class="Detail"><?=$totalfavorite?> times</span></div>
			        <div class="GamePlays"><span class="Label">Played:</span> <span class="Detail"><?=$ep->remove($row['visits'])?> times</span></div>
			        <div id="ctl00_cphRoblox_rbxGames_dlGames_ctl00_pGameCurrentPlayers">
				
				        <?php if($server['players'] > 0){ ?><div class="GameCurrentPlayers"><span class="DetailHighlighted"><?=number_format($server['players'])?> players online</span></div><?php } ?>
			        
			</div>
		        </div>
		    </div>
	        </td>
			<?php }}else{ ?><p>No results found.</p><?php } ?>
		</tr>
	</tbody></table>
        <div id="ctl00_cphRoblox_rbxGames_FooterPagerPanel" class="HeaderPager">
            
            <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page <?=$page?> of <?=$numberofpages?></span>
			<?php if($page > 1){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Games.aspx?p=<?=$page-1?><?php if(isset($_GET['m'])){ ?>&m=<?=$m?><?php } ?>"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a><?php } ?>
            <?php if($page < $numberofpages){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="Games.aspx?p=<?=$page+1?><?php if(isset($_GET['m'])){ ?>&m=<?=$m?><?php } ?>">Next <span class="NavigationIndicators">&gt;&gt;</span></a><?php } ?>
        </div>
    </div>

</div>
        

        <div style="clear: both;"></div>
    </div>

				</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


