<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no")
{
	header("Location: /Login/Default.aspx");
	exit;
}

if(isset($_POST['submit'])){
	$amount = (int)$_POST['amount'];
	$mtype = $_POST['mtype'];
	
	if($amount < 1){
		echo "Set a value that you want to trade.";
	}else{
	
		if($mtype == "rx"){
			if($amount <= $_USER['tix']){
				$amountget = floor($amount / 10);
				
				$amountq = mysqli_query($conn,"UPDATE users SET `robux` = `robux` + '$amountget', `tix` = `tix` - '$amount' WHERE id = '{$_USER['id']}'") or die(mysqli_error($conn));
				
				header("Location: /my/accountbalance/trade");
			}else{
				echo "You can't afford this trade.";
			}
		}elseif($mtype == "tx"){
			if($amount <= $_USER['robux']){
				$amountget = floor($amount * 10);
				
				$amountq = mysqli_query($conn,"UPDATE users SET `tix` = `tix` + '$amountget', `robux` = `robux` - '$amount' WHERE id = '{$_USER['id']}'") or die(mysqli_error($conn));
				
				header("Location: /my/accountbalance/trade");
			}else{
				echo "You can't afford this trade.";
			}
		}else{
			echo "Invalid type";
		}
	
	}
}

?>
<title>Currency Exchange</title> 
<div id="Body">
	<div id="TradeCurrencyContainer">
	<h2>Basic Currency Exchange</h2>
	<font face="Verdana">
		<div style="margin-bottom:5px; text-align:center;"><a href="#" onclick="location.reload()">Refresh</a></div>
	</font>
	<div class="LeftColumn">
		<div id="CurrencyBidsPane">
			<div class="CurrencyBids">
				<h4>Available tokens</h4>
				<div class="CurrencyBid">
					1 @ 10
				</div>
			</div>
		</div>
	</div>
	<div class="CenterColumn">
		
		<div id="ctl00_cphRoblox_CurrencyTradePane">
			<div class="CurrencyTrade">
				<h4>Trade</h4>
				
				<form method="post" style="padding:25px;">
					<ul>
						<li>10 tokens = 1 dodgeball</li>
						<li>1 dodgeball = 10 tokens</li>
					</ul>
					<input id="radioRX" type="radio" name="mtype" value="rx" checked="checked"><label for="radioRX">To dodgeball</label>
					<input id="radioTX" type="radio" name="mtype" value="tx"><label for="radioTX">To tokens</label>
					<br><br>
					<input id="amounttxt" name="amount" type="number" maxlength="9" tabindex="2" value="10" class="TradeBox" autocomplete="off">
					<br><br>
					I will get <span id="amount">1</span> <span id="type" style="color:green;">D</span>
					<script>
						$("#amounttxt").on("input", function() {
						    if($("input[name=mtype]:checked").val() == "rx") {
						        $("#amount").text(Math.floor($(this).val() / 10));
						        $("#type").css("color", "green").html("D");
						    } else {
						        $("#amount").text(Math.floor($(this).val() * 10));
						        $("#type").css("color", "goldenrod").html("TX");
						    }
						});
						$("input[name=mtype]").on("change", function() {
						    if($("input[name=mtype]:checked").val() == "rx") {
						        $("#amount").text(Math.floor($("#amounttxt").val() / 10));
						        $("#type").css("color", "green").html("D");
						    } else {
						        $("#amount").text(Math.floor($("#amounttxt").val() * 10));
						        $("#type").css("color", "goldenrod").html("TX");
						    }
						});
					</script>
					<br><br>
					<input type="submit" name="submit" value="Submit Trade">
				</form>
			</div>
		</div>
		<div class="TradingDashboard">
		</div>
	</div>
	<div class="RightColumn">
		<div id="CurrencyOffersPane">
			<div class="CurrencyOffers">
				<h4>Available dodgeball</h4>
				<div class="CurrencyOffer">
					10 to 1
				</div>
			</div>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


