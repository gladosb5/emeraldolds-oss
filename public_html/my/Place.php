<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

if(!$logged == "yes"){
		die("You are not logged in!");
	}

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";
$id = (int)addslashes($_GET['ID']);
$sql = "SELECT * FROM games WHERE id = '".$id."';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
while ($game = mysqli_fetch_assoc($result)) {

if($_USER['administrator'] == "yes" || $game['creator_id'] == $_USER['id']){
}else{
	header("Location: /Error.aspx");
}
$creatorq = mysqli_query($conn, "SELECT * FROM users WHERE id='".$game['creator_id']."'") or die(mysqli_error($conn));
$creator = mysqli_fetch_assoc($creatorq);

if(isset($_POST['resettype'])) {
        $new = (int)$_POST['resettype'];
        $tokenn = $game['secretkey'];
        $real2 = $game['id'];
        $source = "";
        if($new == 0) {
            $source = $_SERVER["DOCUMENT_ROOT"] . "/Starter/happyhome.rbxl";
            $source2 = $_SERVER["DOCUMENT_ROOT"] . "/images/HappyHomeBig.png";
            $source3 = $_SERVER["DOCUMENT_ROOT"] . "/images/HappyHomeSmall.png";
        } elseif($new == 1) {
            $source = $_SERVER["DOCUMENT_ROOT"] . "/Starter/startingbrickbattle.rbxl";
            $source2 = $_SERVER["DOCUMENT_ROOT"] . "/images/BrickBattleBigNew.png";
            $source3 = $_SERVER["DOCUMENT_ROOT"] . "/images/BrickBattleSmall.png";
        } elseif($new == 2) {
            $source = $_SERVER["DOCUMENT_ROOT"] . "/Starter/baseplate.rbxl";
            $source2 = $_SERVER["DOCUMENT_ROOT"] . "/images/EmptyBaseBig.png";
            $source3 = $_SERVER["DOCUMENT_ROOT"] . "/images/BaseplateSmall.png";
        }

        $destination = $_SERVER["DOCUMENT_ROOT"] . "/asset/places/$tokenn.rbxl";
        $destination2 = $_SERVER["DOCUMENT_ROOT"] . "/Thumbs/PlaceAssetCache/$real2.png";
        $destination3 = $_SERVER["DOCUMENT_ROOT"] . "/Thumbs/PlaceAssetCache/$real2-small.png";
        
        // if (copy($source, $destination)) { // Commented out to prevent .rbxl file creation
        // } else {
        //     echo "wat";
        //     exit();
        // }
        if (copy($source2, $destination2)) {
        } else {
            echo "wat img";
            exit();
        }
        if (copy($source3, $destination3)) {
        } else {
            echo "wat smsll imh ";
            exit();
        }
        header("Location: /PlaceItem.aspx?ID=$real2");
        exit();
}

if(isset($_POST['updatend'])){
	$name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iName']));
	$desc = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iDesc']));
	$copy = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iCopy']));
    $pvalue = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['accessType']));
    
    if($copy == "on") {
        $copy = 1;
    } else {
        $copy = 0;
    }
    
    if($pvalue == "public") {
        $pvalue = 1;
    } else {
        $pvalue = 0;
    }
    
	if (strlen($name) <= 5000000000000000 && strlen($desc) <= 20000000000000000) {
		if (strlen($name) > 0 && strlen($desc) > 0) {
			$strlencheck1 = str_replace(" ", "", $name);
			$strlencheck2 = str_replace(" ", "", $desc);
					
			if (strlen($strlencheck1) > 0 && strlen($strlencheck2) > 0) {
				$updq = mysqli_query($conn,"UPDATE games SET name = '$name', description = '$desc', copy = '$copy', public = '$pvalue' WHERE id = '{$game['id']}'") or die(mysqli_error($conn));
				$updateTime = mysqli_query($conn, "UPDATE games SET creation_date = NOW() WHERE id = '{$game['id']}'");
				header("Location: /PlaceItem.aspx?ID={$game['id']}");
			}else{
				echo "missing info";
			}
		}else{
			echo "missing info";
		}
	}else{
		echo "db max info cant do anymore...";
	}
}

if(isset($_POST['updateall'])){
	$name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iName']));
	$desc = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iDesc']));
	if (strlen($name) <= 40 && strlen($desc) <= 1500) {
		if (strlen($name) > 0 && strlen($desc) > 0) {
			$strlencheck1 = str_replace(" ", "", $name);
			$strlencheck2 = str_replace(" ", "", $desc);
					
			if (strlen($strlencheck1) > 0 && strlen($strlencheck2) > 0) {
					$updq = mysqli_query($conn,"UPDATE games SET name = '$name', description = '$desc' WHERE id = '{$game['id']}'") or die(mysqli_error($conn));
					header("Location: /PlaceItem.aspx?ID={$game['id']}");
			}else{
				echo "Missing Information.";
			}
		}else{
			echo "Missing Information.";
		}
	}else{
		echo "Name can only be below 40 characters and description can only be below 1500 characters.";
	}
}

?>
<title>emeraldnews - Configure Place</title> 
<script>
<?php
	$pricebux = (int)$game['price2'];
	$pricetix = (int)$game['price'];
  ?>
	$(document).ready(function() {
	<?php if($game['sale'] == 1){ ?>$("#sellItemChk").prop("checked", true);
	$("#PricingPanel").show();<?php }else{ ?>$("#sellItemChk").prop("checked", false);
	$("#PricingPanel").hide();<?php } ?>

	<?php if($game['buywith2'] == "robux"){ ?>
	$(".robuxCheckbox").prop("checked", true);
	$("#robuxTxt").prop("disabled", false);
	$(".buxFee").removeAttr("style");
	$(".buxEarn").removeAttr("style");
	<?php } ?>
	
	<?php if($game['buywith'] == "tix" && $game['price'] > 0){ ?>
	$(".tixCheckbox").prop("checked", true);
	$("#tixTxt").prop("disabled", false);
	$(".tixFee").removeAttr("style");
	$(".tixEarn").removeAttr("style");
	<?php } ?>

	
		$("#robuxTxt, #tixTxt").bind({
			keydown: function(e) {
				if (e.shiftKey === true ) {
					if (e.which == 9) {
						return true;
					}
					return false;
				}
				if (e.which > 57) {
					return false;
				}
				if (e.which==32) {
					return false;
				}
				return true;
			}
		});
		$("#sellItemChk").click(function() {
			if($(this).is(':checked')) {
				$('#PricingPanel').show();
			} else {
				$('#PricingPanel').hide();
			}
		});
	});
	
	$(window).on('load', function() {
		$(".robuxCheckbox").change(function() {
			if(this.checked) {
				$("#robuxTxt").prop("disabled", false);
				$("#robuxTxt").val(0);
				$(".buxFee").removeAttr("style");
				$(".buxEarn").removeAttr("style");
				$(".robuxFee").text("");
				$(".robuxEarn").text("");
			} else {
				$("#robuxTxt").prop("disabled", true);
				$("#robuxTxt").val(0);
				$(".buxFee").css("display", "none");
				$(".buxEarn").css("display", "none");
				$(".robuxFee").text("---");
				$(".robuxEarn").text("---");
			}
		});

		$(".tixCheckbox").change(function() {
			if(this.checked) {
				$("#tixTxt").prop("disabled", false);
				$("#tixTxt").val(0);
				$(".tixFee").removeAttr("style");
				$(".tixEarn").removeAttr("style");
				$(".ticketFee").text("");
				$(".ticketEarn").text("");
			} else {
				$("#tixTxt").prop("disabled", true);
				$("#tixTxt").val(0);
				$(".tixFee").css("display", "none");
				$(".tixEarn").css("display", "none");
				$(".ticketFee").text("---");
				$(".ticketEarn").text("---");
			}
		});

		$('#robuxTxt').on('input propertychange paste', function() {
			$(".robuxFee").text(Math.round($("#robuxTxt").val() * 0.1));
			$(".robuxEarn").text(Math.round($("#robuxTxt").val() - $("#robuxTxt").val() * 0.1));
		});

		$('#tixTxt').on('input propertychange paste', function() {
			$(".ticketFee").text(Math.round($("#tixTxt").val() * 0.1));
			$(".ticketEarn").text(Math.round($("#tixTxt").val() - $("#tixTxt").val() * 0.1));
		});
	});
</script>
<div id="Body">
					
	<form method="post">
	<div id="ConfigurePlaceContainer">
		<h2>Configure news (improved edition the old one was too clunky for me sad face)</h2>
		
		<div id="PlaceName">
			<span class="Label">naming:</span><br>
			<input name="iName" type="text" value="<?=$game['name']?>" maxlength="50" class="TextBox">
		</div>
		
		<div id="PlaceThumbnail"><a disabled="disabled" supportsalphachannel="False" title="<?=$game['name']?>" onclick="return false" style="display:inline-block;height:230px;width:420px;"><img src="/Thumbs/PlaceAsset.ashx?assetId=<?php echo $id;?>.png" border="0" id="img" alt="<?=$game['name']?>"></a></div>
		
		<div id="PlaceDescription">
			<span class="Label">news (support html text thing):</span><br>
			<textarea name="iDesc" rows="2" cols="20" class="MultilineTextBox" style="height:150px;max-width: 400px;"><?=$game['description']?></textarea>
		</div>
		
		<!-- <div id="PlaceAccess">
			<fieldset title="Access">
				<legend>Access</legend>
				<div class="Suggestion">
					This determines who can access your place.
				</div>
				<div class="PlaceAccessRow">
                    <img src="http://www.emeraldolds.glados.pro/images/public.png" alt="Public" style="border-width:0px;">
                    <input type="radio" name="accessType" value="public" <?php if($game['public'] == 1) { ?> checked="checked" <?php } ?>>
                    <label for="iPublic">Public: Anybody can visit my place</label><br>
                    <img src="http://www.emeraldolds.glados.pro/images/locked.png" alt="Friends-only" style="border-width:0px;">
                    <input type="radio" name="accessType" value="friends" <?php if($game['public'] == 0) { ?> checked="checked" <?php } ?>>
                    <label for="iFriend">Friends: Only my friends can visit my place</label>
                </div>

			</fieldset>
        </div> -->
        
        <!-- <div id="PlaceCopyProtection">
			<fieldset title="Copy Protection">
				<legend>Copy Protection</legend>
				<div class="Suggestion">
					Checking this will prevent your place from being copied but will also make it available to others only in online mode.
				</div>
				<div class="CopyProtectionRow">
					<input type="checkbox" <?php if($game['copy'] == 1) { echo 'checked'; }?> name="iCopy"><label for="iCopy">Copy-Lock my place</label>
				</div>
			</fieldset>
        </div>
         -->
        <script>
            function openResetBox() {
                var boxidfk = document.getElementById("placeBox");
                var idfkkk = document.getElementById("PlaceReset")
                
                boxidfk.style.display = "block";
                idfkkk.style.marginBottom = "150px";
            }
            function closeResetBox() {
                var boxidfk = document.getElementById("placeBox");
                var idfkkk = document.getElementById("PlaceReset")
                
                boxidfk.style.display = "none";
                idfkkk.style.marginBottom = "0px";
            }
            function resetPlace(real) {
                console.log(real);
            }
        </script>
        
        <div id="PlaceReset">
			<div class="popupControl" id="placeBox" style="width:418px;">
    <div>
        <div align="right">
            <a class="PopUpOption" href="javascript:closeResetBox()">[ close window ]</a>
        </div>
        <!-- <div class="PopUpInstruction">To reset your place, click an image below:</div>
        <form id="resetForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <table cellspacing="0" cellpadding="10" align="Center" border="0" style="border-collapse:collapse;">
                <tbody>
                    <tr>
                        <td align="center" valign="middle" style="color:#003399;background-color:White;">
                            <button type="submit" name="resettype" value="0" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;"><img src="http://www.emeraldolds.glados.pro/images/HappyHomeSmall.png" width="120px" height="70px" border="0" alt="Happy Home in Robloxia"></button><br>
                            <span>Happy Home in Robloxia</span>
                        </td>
                        <td align="center" valign="middle" style="color:#003399;background-color:White;">
                            <button type="submit" name="resettype" value="1" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;"><img src="http://www.emeraldolds.glados.pro/images/BrickBattleSmall.png" width="120px" height="70px" border="0" alt="Starting BrickBattle Map"></button><br>
                            <span>Starting BrickBattle Map</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle" style="color:#003399;background-color:White;">
                            <button type="submit" name="resettype" value="2" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;"><img src="http://www.emeraldolds.glados.pro/images/BaseplateSmall.png" width="120px" height="70px" border="0" alt="Empty Baseplate"></button><br>
                            <span>Empty Baseplate</span>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

			<fieldset title="Reset Place">
				<legend>Reset Place</legend>
				<div class="Suggestion">
					Only do this if you want to reset your place to one of our starting templates.  This will cause you to lose any changes you have made and cannot be un-done.
				</div> -->
				<!-- <div class="ResetPlaceRow">
					<div class="Button" onclick="openResetBox()" style="width:80px;">
	
						Reset Place
					
</div> -->
				</div>
			</fieldset>
			
        </div>
		
        <div class="Buttons">
				<input name="updatend" id="Submit" tabindex="4" class="Button" type="submit" value="Update">&nbsp;
				<a id="Cancel" tabindex="5" class="Button" href="/PlaceItem.aspx?ID=<?=$game['id']?>">Cancel</a>
			</div>
	</div></form>

				</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; }} else {header('location: /Error.aspx');} ?>


