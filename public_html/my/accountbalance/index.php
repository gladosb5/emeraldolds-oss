<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no")
{
  header("Location: /Login/Default.aspx");
  exit;
}

?>
<title>Account Balance</title> 
<div id="Body">
  <div id="info" style="position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(100,100,100,0.25);">
  <div style="position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%);">
    <div id="UserBadgesPane" style="width: 400px;">
        <div id="UserBadges">
            <h4><font face="Comic sans MS" size="3">My Account Balance</font></h4>
            <p style="margin-top: 15px;">this page is work in progress so like everything here isnt ready yet.</p>
            <p>We are not sorry for any inconvenience</p>
            <div style="margin-bottom: 20px;" id="PurchaseButton">
                <a class="Button" onclick="$('#info').hide()">OK</a>
            </div>
            <table cellspacing="0" border="0" align="Center"> 
            </table>
        </div>      
    </div>
  </div>
</div>
<div id="MyAccountBalanceContainer">
  <h2>My Account Balance</h2>
  <div id="AboutRobux">
    <h3>My Money</h3>
    
    <div style="margin-top:20px;margin-bottom:20px">
    <ul>
      <li><a href="/my/accountbalance/trade">Trade Currency</a></li>
      <li><a href="/Upgrades/dodgeballs.aspx">Buy dodgeballs</a></li>
    </ul>
  </div>
    

    <h3>What are dodgeballs?</h3>
    <!-- <p>dodgeballs are the principle currency of this website. Citizens in the Builders Club receive a daily allowance of dodgeballs to help them live a comfortable life of leisure. For this and other benefits, consider joining <a href="/Upgrades/BuildersClub.aspx">Builders Club</a>! Alternately, you can <a href="/Upgrades/dodgeballs.aspx">get dodgeballs</a> if you wish by donating us.</p> -->
    <p>i have no idea to do with dodgeballs...</p>
    <h3>What are tokens?</h3>
    <p>tokens are similar to tokens you win in an arcade. You play the game, get tokens, and are rewarded with fabulous prizes. tokens are granted to citizens who are helping to expand and improve this website. The primary way to get tokens is to make a cool place, and then get people to visit it. You can also get the daily login bonus, just by showing up!</p>
    <h3>how to i use it?</h3>
    <p>in your account, you can use the referrals to give someone access to this website!</p>
  </div>
  <div id="Earnings">
    <h3>Earnings</h3>
    <div>
      <div class="Label"></div>
      <div class="Field"><img id="ctl00_cphRoblox_RobuxIcon" src="/images/Robux.png" alt="dodgeballs" style="border-width:0px;"></div>
      <div class="Field"><img id="ctl00_cphRoblox_tokensIcon" src="/images/Tickets.png" alt="tokens" style="border-width:0px;"></div>
    </div>
    <div class="Earnings_Period">
      <h4>Past Day</h4>
      <div class="Earnings_LoginAward">
        <div class="Label">Login Award</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_PlaceTrafficAward">
        <div class="Label">Place Traffic Award</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_SaleOfGoods">
        <div class="Label">Sale of Goods</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_PeriodTotal">
        <div class="Label">Total:</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
    </div>
    <div class="Earnings_Period">
      <h4>Past Week</h4>
      <div class="Earnings_LoginAward">
        <div class="Label">Login Award</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_PlaceTrafficAward">
        <div class="Label">Place Traffic Award</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_SaleOfGoods">
        <div class="Label">Sale of Goods</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_PeriodTotal">
        <div class="Label">Total:</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
    </div>
    <div class="Earnings_Period">
      <h4>Past Month</h4>
      <div class="Earnings_LoginAward">
        <div class="Label">Login Award</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_PlaceTrafficAward">
        <div class="Label">Place Traffic Award</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_SaleOfGoods">
        <div class="Label">Sale of Goods</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_PeriodTotal">
        <div class="Label">Total:</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
    </div>
    <div class="Earnings_Period">
      <h4>All Time</h4>
      <div class="Earnings_LoginAward">
        <div class="Label">Login Award</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_PlaceTrafficAward">
        <div class="Label">Place Traffic Award</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_SaleOfGoods">
        <div class="Label">Sale of Goods</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
      <div class="Earnings_PeriodTotal">
        <div class="Label">Total:</div>
        <div class="Field">0</div>
        <div class="Field">0</div>
      </div>
    </div>
  </div>
</div>
<div style="clear:both;"></div>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


