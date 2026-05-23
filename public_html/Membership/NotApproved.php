<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";
if($logged == "no"){
		header("Location: /Login/Default.aspx");
	}
$myid = $_USER['id'];
		$banq = mysqli_query($conn,"SELECT * FROM bans WHERE userid = $myid") or die(mysqli_error($conn));
		if(mysqli_num_rows($banq) == 1){
			$banrow = mysqli_fetch_assoc($banq);
			
			
			
			if($banrow['time'] <= time() && $banrow['type'] !== '5' && $banrow['type'] !== '0'){
				$unbanq = mysqli_query($conn,"UPDATE bans SET type = '0' WHERE userid = $myid") or die(mysqli_error($conn));
				header("Location: /Membership/NotApproved.aspx");
			}
		}else{
			header("Location: /Error.aspx");
		}
		
		if($banrow['type'] == '0'){
			$bantype = "Reminder";
			$bantype2 = "nothing";
		}elseif($banrow['type'] == '1'){
			$bantype = "Banned for 1 day";
			$bantype2 = "1 day";
		}elseif($banrow['type'] == '2'){
			$bantype = "Banned for 3 days";
			$bantype2 = "3 days";
		}elseif($banrow['type'] == '3'){
			$bantype = "Banned for 7 days";
			$bantype2 = "7 days";
		}elseif($banrow['type'] == '4'){
			$bantype = "Banned for 14 days";
			$bantype2 = "4 days";
		}elseif($banrow['type'] == '5'){
			$bantype = "Account Deleted";
		}
		

?>
<title>emeraldnews | Disabled Account</title> 
<div id="Body">
					
    
    <div style="margin: 150px auto 150px auto; width: 500px; border: black thin solid; padding: 22px;">
        <h2>
            <?=$bantype?>
        </h2>
        <p>
            Our content monitors have determined that your behavior at emeraldnews has been in violation of our Terms of Service. <?php if($banrow['type'] !== '5'){ ?>We will terminate your account if you do not abide by the rules.</p><?php } ?>
		<p>
            Reason:<span style="font-weight: bold">
		<?php if($banrow['IsAssetBan']){ ?>Asset<?php }elseif($banrow['IsProfanityBan']){ ?>Profanity<?php }else{ ?><?=$banrow['unknownReason']?><?php } ?></span>
            <br>
            Source:<span style="font-weight: bold">
                <?=$banrow['Source']?></span>
            <br>
            Reported:<span style="font-weight: bold">
                <?=date("n/j/Y g:i:s A", $banrow['WhenReported'])?></span>
        </p>
		<?php if($banrow['haveAnythingElse'] == 1){ ?>
        <p>
            <span style="font-weight: bold">
                <?=$banrow['reason']?></span>
        </p>
		<?php } ?>
        <p>
            Please abide by the <a href="http://wiki.roblox.com/index.php?title=Community_Guidelines">emeraldnews Community Guidelines</a> so that emeraldnews can be fun for users of all ages.
        </p>
        
        
        <div id="ctl00_cphRoblox_Panel3">
	
            <p>
			<?php if($banrow['type'] !== '5' && $banrow['type'] !== '0'){ ?>
                Your account has been disabled for <?=$bantype2?>. You may re-activate it after
                <span id="ctl00_cphRoblox_Label6"><?=date("n/j/Y g:i:s A", $banrow['time'])?></span><br>
			<?php }elseif($banrow['type'] == '5'){ ?>Your account has been terminated.<?php }else{ ?><a href="/Membership/Reactivate.ashx">Reactivate account</a><?php } ?>
            </p>
        
</div>
        <div id="ctl00_cphRoblox_UpdatePanel1">
	
                
            
</div>
    </div>

				</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";exit();?>


