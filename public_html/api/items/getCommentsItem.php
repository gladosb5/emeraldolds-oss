<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/rateLimit.php";

$id = (int)$_POST['item'];

$itemq = mysqli_query($conn,"SELECT * FROM catalog WHERE id = '$id'") or die(mysqli_error($conn));
$item = mysqli_fetch_assoc($itemq);

$resultsperpage = 10;
                    $check = mysqli_query($conn, "SELECT * FROM catalog_comments WHERE itemid = '$id'");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    if(!isset($_POST['page'])) {
                        $page = 1;
                    }else{
                        $page = (int)$_POST['page'];
                    }

                    $thispagefirstresult = ($page-1)*$resultsperpage;
                    $imageUrl = 'https://emeraldolds.glados.pro/api/Rendering/Avatar.ashx?assetId=' . $userIdToDisplay;
                    $base64Image = file_get_contents($imageUrl);
                    
                    // Check if the image was successfully fetched
                    if ($base64Image === FALSE) {
                        // Handle the error
                        echo "Failed to fetch the image.";
                        $base64Image = ''; // Ensure $base64Image is defined
                    }
?>
<?php if($logged == "yes"){ ?>
<h3 style="float:left">Comments (<?=number_format($usercount)?>)</h3>
<?php } ?>
			<div id="ctl00_cphRoblox_rbxCatalog_HeaderPagerPanel" class="HeaderPager">
		    
		    <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page <?=$page?> of <?=$numberofpages?></span>
			<?php if($page > 1){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="javascript:return false;" onclick="getComments(<?=$page-1?>,<?=$id?>)"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a><?php } ?>
            <?php if($page < $numberofpages){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="javascript:return false;" onclick="getComments(<?=$page+1?>,<?=$id?>)">Next <span class="NavigationIndicators">&gt;&gt;</span></a><?php } ?>
	    </div>
		            <div class="Comments">
                <?php
			
			
            $sql = "SELECT * FROM catalog_comments WHERE itemid = '$id' ORDER by id DESC LIMIT ".$thispagefirstresult.",".$resultsperpage;
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
              
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
				  $userq = mysqli_query($conn,"SELECT * FROM users WHERE id = '{$row['userid']}'") or die(mysqli_error($conn));
				  
					$user = mysqli_fetch_assoc($userq);
				  $updated = context::updated($row['creation_date']);

				  ?>
                    <div class="Comment">
                    <div class="Commenter">
                      <div class="Avatar">
                        <a title="<?=$user['username']?>" href="/User.aspx?ID=<?=$user['id']?>" style="display:inline-block;height:100px;width:100px;cursor:pointer;">
                        <img style="width:100px;height:100px;" src="<?=$base64Image?>&isSmall=1" border="0" id="img" alt="<?=$user['username']?>">
                        </a>
                      </div>
                    </div>
                    <div class="Post">
                      <div class="Audit">
                        Posted
                        <?=$updated?>
                        by
                        <a href="/User.aspx?ID=<?=$user['id']?>"><?=$user['username']?></a>
                      </div>
                      <div class="Content"><?=$ep->remove($row['content'])?></div>
                      <div class="Actions">
                        <div class="ReportAbusePanel">
                          <span class="AbuseIcon"><a href="#"><img src="/images/abuse.gif" alt="Report Abuse" style="border-width:0px;"></a></span>
                          <span class="AbuseButton"><a href="#">Report Abuse</a></span>
                                                  </div>
                      </div>
                    </div>
                    <div style="clear: both;"></div>
                  </div>
			<?php }}else{ echo "<p>&nbsp;&nbsp;no comments found.</p>"; } ?>
                    </div>
                    <div id="ctl00_cphRoblox_rbxCatalog_HeaderPagerPanel" class="HeaderPager">
		    
		    <span id="ctl00_cphRoblox_rbxCatalog_HeaderPagerLabel">Page <?=$page?> of <?=$numberofpages?></span>
			<?php if($page > 1){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="javascript:return false;" onclick="getComments(<?=$page-1?>,<?=$id?>)"><span class="NavigationIndicators">&lt;&lt;</span> Previous</a><?php } ?>
            <?php if($page < $numberofpages){ ?><a id="ctl00_cphRoblox_rbxCatalog_FooterPagerHyperLink_Next" href="javascript:return false;" onclick="getComments(<?=$page+1?>,<?=$id?>)">Next <span class="NavigationIndicators">&gt;&gt;</span></a><?php } ?>
	    </div><div id="ctl00_cphRoblox_CommentsPane_PostAComment" class="PostAComment">
					<form method="POST">
                <h3>Comment on this <?=ucfirst($item['type'])?></h3>
                <div class="CommentText">
    <textarea id="comment" rows="5" cols="20" id="ctl00_cphRoblox_CommentsPane_NewCommentTextBox" class="MultilineTextBox" style="max-width: 500px;"></textarea>
</div>
                <div class="Buttons"><a id="ctl00_cphRoblox_CommentsPane_NewCommentButton" class="Button" type="submit" onclick="<?php if($logged !== "yes"){ ?>location.href='/Login/Default.aspx'<?php }else{ ?>Comment(<?=$id?>)<?php } ?>">Post Comment</a></div></form>
            </div>


