<?php
ob_start();
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

  session_start();
  
  error_reporting(0);
/*
  if(isset($_USER["username"])){
  $_USERID = $_USER["username"];
  $_USERQ = mysqli_query($conn, "SELECT * FROM users WHERE username='$_USERID'") or die(mysqli_error($conn));
  $_USER = mysqli_fetch_assoc($_USERQ);
  
  $iphash = md5($_SERVER["REMOTE_ADDR"]);
  $myid = $_USER['id'];
  $iphashq = mysqli_query($conn, "UPDATE `users` SET `IP` = '".$iphash."' WHERE `users`.`id` = '".$myid."';");
  
  if($_SERVER['REQUEST_URI'] !== "/Membership/NotApproved.aspx"){
    $banq = mysqli_query($conn,"SELECT * FROM bans WHERE userid = $myid") or die(mysqli_error($conn));
    if(mysqli_num_rows($banq) == 1){
      header("Location: /Membership/NotApproved.aspx");
    }
  }
  
  $unreadmessagesq = mysqli_query($conn, "SELECT * FROM messages WHERE user_to='{$_USER['id']}' AND reada =0 AND deleted = 0") or die(mysqli_error($conn));
  $unreadmessages = (int)mysqli_num_rows($unreadmessagesq);
  }
  if(isset($_USER['username'])){
        $logged = 'yes';
    $time = time();
    
    $lastseencheck = mysqli_query($conn,"UPDATE users SET lastseen = '$time' WHERE id = '{$_USER['id']}'");
    
    if ($_USER['next_tix_reward'] < time()) {
      $dailyreward = 15;
      $nextrew = time() + 86400;
      mysqli_query($conn, "UPDATE users SET `tix` = `tix` + '$dailyreward', `next_tix_reward` = '$nextrew' WHERE id='{$_USER['id']}'") or die(mysqli_error($conn));
      }
    
    $date=time();
      if($_USER['MembershipType'] == 'BuildersClub') {
        if($_USER['MembershipExpire'] <= $date) {
            $removebc = str_replace("'","\'",'None');
            $sql = "UPDATE `users` SET `MembershipType` = '".$removebc."' WHERE `users`.`id` = ".$_USER["id"].";";
            mysqli_query($conn, $sql);
    }else{
      if ($_USER['next_bux_reward'] < time()) {
        $dailyreward = 15;
        $nextrew = time() + 86400;
        mysqli_query($conn, "UPDATE users SET `robux` = `robux` + '$dailyreward', `next_bux_reward` = '$nextrew' WHERE id='{$_USER['id']}'") or die(mysqli_error($conn));
      }
      
      $suadhuasd = $_USER['id'];
      $hardhatcheckq = mysqli_query($conn,"SELECT * FROM owned_items WHERE itemid = '49' AND ownerid = '$suadhuasd'") or die(mysqli_error($conn));
      
      if(mysqli_num_rows($hardhatcheckq) == 0){
        $givehardhat = mysqli_query($conn,"INSERT INTO owned_items (itemid, ownerid, type) VALUES ('49','$suadhuasd','hat')") or die(mysqli_error($conn));
      }
    }
      }
    
    }else{
        $logged = 'no';
    } */
  
  $WebsiteName = "emeraldnews";
    $WebsiteDescription = "a website designed for our class 6 emerald!";

  try {
      $sitesettings = Cache::remember('site_settings', 120, function () use ($db) {
          return $db->selectOne(
              'SELECT id, maintenance, adsenabled FROM sitesettings WHERE id = ? LIMIT 1',
              'i',
              [1],
              ['id' => 'int', 'maintenance' => 'int', 'adsenabled' => 'int']
          ) ?? ['maintenance' => 0, 'adsenabled' => 0];
      });
  } catch (Throwable $e) {
      error_log('[SITE_SETTINGS] ' . $e->getMessage());
      $sitesettings = ['maintenance' => 0, 'adsenabled' => 0];
  }

  if (!is_array($sitesettings)) {
      $sitesettings = ['maintenance' => 0, 'adsenabled' => 0];
  }
  //setcookie("doesheknow", "test", time() + (24 * 60 * 60), "/");
if($_COOKIE['doesheknow'] == "123") {header("Location: https://youtu.be/4XGYlyLNUvY");}
  $maintenance_key = getenv('MAINTENANCE_KEY');
  if($_COOKIE["doesheknow"] != $maintenance_key){
  if(((int)($sitesettings['maintenance'] ?? 0)) === 1 && $_USER['administrator'] !== "yes"){
    error_reporting(0);
    if(isset($_POST['maintenancekey'])) {
        setcookie("doesheknow", "{$_POST['maintenancekey']}", time() + (24 * 60 * 60), "/");
        header("Location: /");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>you need to enter passkey to websiting....</title> 
        <style type="text/css"> 
      .content {
        width: 800px;
        margin-top: 0px;
        margin-bottom: 10px;
        margin-right: auto;
        margin-left: auto;
        text-align: justify;
      }
        </style>
        
  </head>
    <body style="background:rgb(0,0,0); color:white;">
        <div style="width:900px;margin:auto;"> <!-- background:#fff; -->
            <img style="display:block;margin:auto;" src="/images/forem.png" width="257px"> 
                <div class="content"> 
                    <p style="text-align: center">&nbsp;</p>
                    <p style="text-align: center">
                        <img src="/images/maintenance.png" alt="Offline">
                    </p>
                    <p style="text-align: center; font-size: 14px;font-family:sourcesans;letter-spacing: 0.2px;font-style: normal;">
                        This site requires you to put in a passkey to enter!
                    </p>
                    <br>
                    
                    <form action="" method="POST"><p style="text-align: center;">
        <input name="maintenancekey" type="password" >
        <input type="submit" name="F" value="G">
        <input type="submit" name="R" value="L">
        <input type="submit" name="E" value="A">
        <input type="submit" name="N" value="D">
        <input type="submit" name="Z" value="O">
        <input type="submit" name="Y" value="S"></p></form>
                </div>
        </div>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
          window.setTimeout(function() { window.location = '../'; }, 86400000);
            });
        </script>

</body>
</html>
    <?php
    die();
  }}


?>
<?php
$dataSavingModeEnabled = isset($_COOKIE['data_saving_mode']) && $_COOKIE['data_saving_mode'] === '1';

if ($dataSavingModeEnabled) {
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $allowedPaths = [
        '/News.aspx',
        '/User.aspx',
        '/Logout.aspx',
        '/Login/Default.aspx',
        '/Login/New.aspx',
        '/PlaceItem.php',
        '/PlaceItem.aspx'
    ];
    if (!in_array($requestPath, $allowedPaths, true)) {
        header('Location: /News.aspx');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link id="ctl00_Favicon" rel="Shortcut Icon" type="image/png" href="/images/gold.png"/>
    <meta name="author" content="emeraldnews very cool emeraldnews emerson"/>
    <meta name="keywords" content="emerson"/>
    <meta name="robots" content="all"/>
    <meta name="description" content="<?=$WebsiteDescription?>">
    <title><?=htmlspecialchars($WebsiteName, ENT_QUOTES, 'UTF-8')?><?php if ($dataSavingModeEnabled) { echo ' | Data Saving Mode'; } ?></title>
    <?php if ($dataSavingModeEnabled) { ?>
      <style>
        body {
          margin: 0;
          font-family: Arial, sans-serif;
          background: #f5f7fa;
          color: #0c1b33;
        }
        a {
          color: #0b63c5;
        }
        .data-saving-container {
          max-width: 960px;
          margin: 0 auto;
          padding: 1rem 1.5rem;
        }
        .data-saving-banner {
          background: #0c3c78;
          color: #000;
          padding: 0.75rem 1rem;
          border-radius: 0.25rem;
          margin-bottom: 1rem;
          text-align: center;
        }
        .data-saving-banner a {
          color: #ffe28a;
          font-weight: bold;
        }
        .data-saving-mode button {
          background: #0c3c78;
          color: #000;
          border: none;
          border-radius: 0.25rem;
          padding: 0.5rem 1rem;
          cursor: pointer;
        }
        .data-saving-mode button:hover {
          background: #08406f;
        }
      </style>
    <?php } else { ?>
      <link id="ctl00_Imports" rel="stylesheet" type="text/css" href="/CSS/AllCSS.css?v=<?=time();?>"/>
      <link id="ctl00_ModernDesign" rel="stylesheet" type="text/css" href="/CSS/ModernDesign.css?v=<?=time();?>"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
      <script src="/js/modern-ui.js" defer></script>
    <?php } ?>
    <script src="/js/lazyload.js" defer></script>
  </head>
  <body<?= $dataSavingModeEnabled ? ' class="data-saving-mode"' : '' ?>>
      <div id="Container"<?= $dataSavingModeEnabled ? ' class="data-saving-container"' : '' ?>>
        <?php if ($dataSavingModeEnabled) { ?>
          <div class="data-saving-banner">
            Data saving mode is on. Browse the latest news or <a href="/User.aspx?toggleDataSaving=off">turn it off</a> for the full experience.
          </div>
        <?php } ?>
        <?php if(!$dataSavingModeEnabled && ((int)($sitesettings['adsenabled'] ?? 0)) === 1 && getenv('AD_KEY_HEADER') && getenv('AD_SCRIPT_URL_HEADER')) { ?>
        <div style="text-align: center; margin: 20px 0;">
<script type="text/javascript">
  atOptions = {
    "key" : "<?= htmlspecialchars(getenv('AD_KEY_HEADER')) ?>",
    "format" : "iframe",
    "height" : 90,
    "width" : 728,
    "params" : {}
  };
</script>
<script type="text/javascript" src="<?= htmlspecialchars(getenv('AD_SCRIPT_URL_HEADER')) ?>"></script>
<br>
        <?php } ?>
        <div id="Header">
          <div id="Banner">
            <div id="Options">
              <div id="Authentication">
                  <?php if($logged == "no"){ ?><a href="/Login/Default.aspx">Login</a><?php }else{ ?>
                    Logged in as <?=$_USER['username'] ?>&nbsp;<strong>|</strong>&nbsp;<a href="/Logout.aspx">Logout</a>
                  <?php } ?>
              </div>
              <div id="Settings">
              </div>
            
            </div>
            <div id="Logo"><a id="ctl00_rbxImage_Logo" title="<?=$WebsiteName?>" href="/" style="display:inline-block;cursor:pointer;"><img src="/images/forem.png" width=267 border="0" id="img" alt="<?=$WebsiteName?>" blankurl="http://emeraldolds.glados.pro/blank-267x70.gif"/></a>
            </div>
            <div id="Alerts"><table style="width:100%;height:100%"><tr><td valign="middle">
            <?php if($logged == "no"){ ?><p style="color: black;">It seems to me that you are not logged in, log in to have the best experience! (i think)</p><?php } ?>
            <?php if($logged == 'yes'){ if($_USER['robux'] > 0 || $_USER['tix'] > 0 || $unreadmessages > 0) {
                echo '                <table style="width:123%;height:101%;padding-right:20px;">
                <tbody><tr>
                  <td valign="middle">
          
                    <div>
                        <div>'; if($unreadmessages > 0){ echo '<div id="MessageAlert">
                            <a class="MessageAlertIcon"><img src="/images/Message.gif" style="border-width:0px;"></a>&nbsp;
                            <a href="/my/messages/inbox" class="MessageAlertCaption">'.number_format($unreadmessages).' New Messages!</a>
            </div>'; } if($_USER['robux'] > 0){ echo '
                          <div id="RobuxAlert">
                            <a class="emeraldnewsAlertIcon"><img src="/images/Robux.png" style="border-width:0px;"></a>&nbsp;
                            <a href="/my/accountbalance" class="emeraldnewsAlertCaption">'.number_format($_USER['robux']).' dodgeball</a>
            </div>'; } if($_USER['tix'] > 0){ echo '
                          <div id="TicketsAlert">
                            <a class="TicketsAlertIcon"><img src="/images/Tickets.png" style="border-width:0px;"></a>&nbsp;
                            <a href="/my/accountbalance" class="TicketsAlertCaption">'.number_format($_USER['tix']).' tokens</a>
            </div> '; } echo '
                  </div>
                      </div>
                    </div>
                  </td>
                      </tr>
                    </tbody></table>';
      }} ?>
              
</td></tr></table></div>
          </div>


