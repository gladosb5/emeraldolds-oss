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
    $type = $row['type'];
    $saleCheck = $row['sale'];
if($_USER['administrator'] == "yes" || $row['creatorid'] == $_USER['id']){
}else{
	header("Location: /Error.aspx");
}

$creatorq = mysqli_query($conn, "SELECT * FROM users WHERE id='".$row['creatorid']."'") or die(mysqli_error($conn));
$creator = mysqli_fetch_assoc($creatorq);


if(isset($_POST['updatend'])){
	$name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iName']));
	$desc = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iDesc']));
	if (strlen($name) <= 255 && strlen($desc) <= 1000) {
		if (strlen($name) > 0 && strlen($desc) > 0) {
			$strlencheck1 = str_replace(" ", "", $name);
			$strlencheck2 = str_replace(" ", "", $desc);
					
			if (strlen($strlencheck1) > 0 && strlen($strlencheck2) > 0) {
				$updq = mysqli_query($conn,"UPDATE catalog SET name = '$name', description = '$desc' WHERE id = '{$row['id']}'") or die(mysqli_error($conn));
				header("Location: /Item.aspx?ID={$row['id']}");
			}else{
				echo "Missing Information.";
			}
		}else{
			echo "Missing Information.";
		}
	}else{
		echo "Name can only be below 255 characters and description can only be below 1000 characters.";
	}
}

if(isset($_POST['updateall'])){
	$name = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iName']));
	$desc = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['iDesc']));
	$robux = (int)htmlspecialchars(mysqli_real_escape_string($conn, $_POST['robuxN']));
	$tix = (int)htmlspecialchars(mysqli_real_escape_string($conn, $_POST['tixN']));
	$sellitem = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['sellItem']));
	if (isset($_POST['publicchk'])) {
        $publicUse = 1;
    } else {
        $publicUse = 0;
    }
	if (strlen($name) <= 40 && strlen($desc) <= 500) {
		if (strlen($name) > 0 && strlen($desc) > 0) {
			$strlencheck1 = str_replace(" ", "", $name);
			$strlencheck2 = str_replace(" ", "", $desc);
					
			if (strlen($strlencheck1) > 0) {
					if(isset($_POST['sellItem'])){
					if($robux <= -1){
						$sellrobux = false;
					}else{
						$sellrobux = true;
					}
					
					if($tix <= -1){
						$selltix = false;
					}else{
						$selltix = true;
					}
					
					if($sellrobux && $selltix){
						$updq = mysqli_query($conn,"UPDATE catalog SET name = '$name', description = '$desc', buywith = 'tix', price = $tix, buywith2 = 'robux', price2 = $robux, sale = 1 WHERE id = '{$row['id']}'") or die(mysqli_error($conn));
						header("Location: /Item.aspx?ID={$row['id']}");
					}elseif($sellrobux && !$selltix){
						$updq = mysqli_query($conn,"UPDATE catalog SET name = '$name', description = '$desc', buywith = null, price = null, buywith2 = 'robux', price2 = $robux, sale = 1 WHERE id = '{$row['id']}'") or die(mysqli_error($conn));
						header("Location: /Item.aspx?ID={$row['id']}");
					}elseif(!$sellrobux && $selltix){
						$updq = mysqli_query($conn,"UPDATE catalog SET name = '$name', description = '$desc', buywith = 'tix', price = $tix, buywith2 = null, price2 = null, sale = 1 WHERE id = '{$row['id']}'") or die(mysqli_error($conn));
						header("Location: /Item.aspx?ID={$row['id']}");
					}else{
						echo "Since you checked to sell the item, choose a currency.";
					}
				}else{
					$updq = mysqli_query($conn,"UPDATE catalog SET name = '$name', description = '$desc', sale = $publicUse WHERE id = '{$row['id']}'") or die(mysqli_error($conn));
					header("Location: /Item.aspx?ID={$row['id']}");
				}
			}else{
				echo "Missing Information.";
			}
		}else{
			echo "Missing Information.";
		}
	}else{
		echo "Name can only be below 40 characters and description can only be below 500 characters.";
	}
}

?>
<title>Edit Item</title> 
<script>
<?php
	$pricebux = (int)$row['price2'];
	$pricetix = (int)$row['price'];
  ?>
	$(document).ready(function() {
	<?php if($row['sale'] == 1){ ?>$("#sellItemChk").prop("checked", true);
	$("#PricingPanel").show();<?php }else{ ?>$("#sellItemChk").prop("checked", false);
	$("#PricingPanel").hide();<?php } ?>

	<?php if($row['buywith2'] == "robux"){ ?>
	$(".robuxCheckbox").prop("checked", true);
	$("#robuxTxt").prop("disabled", false);
	$(".buxFee").removeAttr("style");
	$(".buxEarn").removeAttr("style");
	<?php } ?>
	
	<?php if($row['buywith'] == "tix" && $row['price'] > -1){ ?>
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
	<div id="EditItemContainer">
		<div id="EditItem">
			<h2>Edit <?php if($row['type'] == "decals") {echo 'Decal';} else { echo ucfirst($row['type']);} ?></h2>
			
			<div id="ItemName">
				<span style="font-weight: bold;">Name:</span><br>
				<input name="iName" type="text" value="<?=$row['name']?>" maxlength="64" class="TextBox">
				<span style="color:Red;visibility:hidden;">A Name is Required</span>
			</div>
			<div id="ItemDescription">
				<span style="font-weight: bold;">Description:</span><br>
				<textarea name="iDesc" maxlength="1000" rows="2" cols="20" class="TextBox" style="height:150px;width: 410px;max-width: 400px; padding: 5px;"><?=nl2br($row['description'])?></textarea>
			</div>
			
			<div class="Buttons">
				<input name="updatend" id="Submit" tabindex="4" class="Button" type="submit" value="Update">&nbsp;
				<a id="Cancel" tabindex="5" class="Button" href="/Item.aspx?ID=<?=$row['id']?>">Cancel</a>
			</div>
			
			<div id="Comments">
				<fieldset title="Turn comments on/off">
					<legend>Turn comments on/off</legend>
					<div class="Suggestion">
						Choose whether or not this item is open for comments.
					</div>
					<div class="EnableCommentsRow">
						<input class="commentCheckbox" type="checkbox" name="commentschk" disabled=""><label>Allow Comments</label>
					</div>
				</fieldset>
			</div> 
			 
			<?php if($type == "model" || $type == "decals") { ?><div id="Comments">
				<fieldset title="Turn public use on/off">
					<legend>Turn public use on/off</legend>
					<div class="Suggestion">
						Choose whether or not this item is open for the public.
					</div>
					<div class="EnableCommentsRow">
						<input class="publicCheckbox"type="checkbox" <?php if($saleCheck == 1) {echo 'checked="checked"';}?>name="publicchk"><label>Allow Public Use</label>
					</div>
				</fieldset>
			</div><?php } ?>
			
			<?php if($type != "model" && $type != "decals") { ?><div id="SellThisItem">
				<fieldset title="Sell this Item">
					<legend>Sell this Item</legend>
					<div class="Suggestion">
						Check the box below and enter a price if you want to sell this item in the emeraldnews
						catalog. Uncheck the box to remove the item from the catalog.
					</div>
					<div class="SellThisItemRow">
						<input id="sellItemChk" class="sellCheckbox" type="checkbox" name="sellItem"><label>Sell this Item</label>
						<div id="PricingPanel" class="PricingPanel" style="display: none;">
							<div id="Pricing" style="
    background-color: #fff;
    border: dashed 1px #000;
    margin: 15px 5px 5px 5px;
    padding: 5px;
">
								<div id="Currency" style="margin-left: 151px;margin-left: 141px;">
									<div class="PricingLabel">
									</div>
									<div class="PricingField_Robux">
										<input class="robuxCheckbox" type="checkbox"><label>for emeraldnews</label>
									</div>
									<div class="PricingField_Tickets">
										<input class="tixCheckbox" type="checkbox"><label>for Tickets</label>
									</div>
									<div style="clear: both;">
									</div>
								</div>
								<div id="Price">
									<div class="PricingLabel" style="width: 135px;">
										Price:
									</div>
									<div class="PricingField_Robux">
										<input id="robuxTxt" name="robuxN" type="number" maxlength="9" class="TextBox" disabled="" value="<?php if(!$row['buywith2'] == "robux"){ ?>0<?php }else{ echo $row['price2']; } ?>">
									</div>
									<div class="PricingField_Tickets">
											<input id="tixTxt" name="tixN" type="number" maxlength="9" class="TextBox" disabled="" value="<?php if(!$row['buywith'] == "tix"){ ?>0<?php }else{ echo $row['price']; } ?>">
										
									</div>
									<span id="PricingError" style="display:none;color:red;">
										The minimum price for this item is <span>1</span>
									</span>
									<span id="PricingErrorMax" style="display:none;color:red;">
										The maximum price for this item is <span>2147483647</span>
									</span>
									<div style="clear: both;"></div>
								</div>
								<div id="Fee" style="margin-top: 18px;">
									<div class="PricingLabel" style="
    width: 135px;
">
											Marketplace Fee @ <br> 10%:
											<br><span class="Suggestion">(minimum 1)</span>
									</div>
									<div class="PricingField_Robux">
										<span class="buxFee" style="display: none;">R$&nbsp;</span>
										<span class="robuxFee">---</span>
									</div>
									<div class="PricingField_Tickets">
										<span class="tixFee" style="display: none;">Tx&nbsp;</span>
										<span class="ticketFee">---</span>
									</div>
									<div style="clear: both;">
									</div>
								</div>
								<div id="Profit" style="margin-top:10px">
									<div class="PricingLabel" style="
    width: 135px;
">
										You Earn:</div>
										<div class="PricingField_Robux">
											<span class="buxEarn" style="display: none;">R$&nbsp;</span>
											<span class="robuxEarn">---</span>
										</div>
										<div class="PricingField_Tickets">
											<span class="tixEarn" style="display: none;">Tx&nbsp;</span>
											<span class="ticketEarn">---</span>
										</div>
									<div style="clear: both;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
			</div><?php } ?>
			<div class="Buttons">
				<input name="updateall" tabindex="4" class="Button" type="submit" value="Update">&nbsp;
				<a id="Cancel" tabindex="5" class="Button" href="/Item.aspx?ID=<?=$row['id']?>">Cancel</a>
			</div>
		</div>
		<div class="Ads_WideSkyscraper">
			
  		</div>
		<div style="clear: both;"></div>
	</div>
</form>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; }} else {header('location: /Error.aspx');} ?>


