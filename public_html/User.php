<?php
// Include necessary files
include $_SERVER["DOCUMENT_ROOT"] . "/api/includes.php";

// Get the user ID from the URL parameter
$id = isset($_GET['ID']) ? (int)$_GET['ID'] : 0;

$home = false;
$userIdToDisplay = $id;

if ($id < 1) {
    if ($logged == "no") {
        header("Location: /Login/Default.aspx");
        exit;
    }
    $home = true;
    $userIdToDisplay = $_USER['id'];
}

$dataSavingModeEnabled = isset($_COOKIE['data_saving_mode']) && $_COOKIE['data_saving_mode'] === '1';

if ($logged === "yes" && $home) {
    $requestedToggle = null;
    if (isset($_POST['toggle_data_saving'])) {
        $requestedToggle = $_POST['toggle_data_saving'];
    } elseif (isset($_GET['toggleDataSaving'])) {
        $requestedToggle = $_GET['toggleDataSaving'];
    }

    if ($requestedToggle !== null) {
        $requestedToggle = strtolower((string) $requestedToggle);
        $shouldEnable = in_array($requestedToggle, ['enable', 'on', '1'], true);
        $shouldDisable = in_array($requestedToggle, ['disable', 'off', '0'], true);

        $domain = function_exists('sessionCookieDomain') ? sessionCookieDomain() : '';

        if ($shouldEnable) {
            $expiry = time() + (86400 * 30);
            setcookie('data_saving_mode', '1', $expiry, '/', $domain, false, false);
            $_COOKIE['data_saving_mode'] = '1';
        } elseif ($shouldDisable) {
            setcookie('data_saving_mode', '', time() - 3600, '/', $domain, false, false);
            unset($_COOKIE['data_saving_mode']);
        }

        $redirectTarget = '/News.php';
        header('Location: ' . $redirectTarget);
        exit;
    }
}

include $_SERVER["DOCUMENT_ROOT"] . "/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"] . "/api/WebsiteBuild/navbar.php";

// Prepare common variables
$messages = ["whatsup", "hello", "hi there", "greetings", "howdy", "స్వాగతం", "Добре дошли", "Tervetuloa", "ողջույն", "آمدید", "καλωσόρισμα", "gm", "bello", "sad person -->", "goofy ahh username -->", "you shoukd kys"];

// Session-based message cycling
if (!isset($_SESSION['message_index'])) {
    $_SESSION['message_index'] = 0;
} else {
    $_SESSION['message_index'] = ($_SESSION['message_index'] + 1) % count($messages);
}
$current_message = $messages[$_SESSION['message_index']];

// Fetch user data (use prepared statements)
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $userIdToDisplay);
$stmt->execute();
$userResult = $stmt->get_result();
$user = $userResult->fetch_assoc();
$stmt->close();

if (!$user) {
    // Handle missing user
    echo '<div id="Body"><p>&nbsp;</p><p>&nbsp;</p><h2 style="text-align: center">The item you requested does not exist</h2><title>emeraldnews | Missing Item</title><p>&nbsp;</p><p>&nbsp;</p></div>';
    include $_SERVER["DOCUMENT_ROOT"] . "/api/WebsiteBuild/footer.php";
    exit;
}
$displayUsername = trim($user['username'] ?? '');
if ($displayUsername === '') {
    $displayUsername = 'Unnamed user';
}
$displayUsernameEsc = htmlspecialchars($displayUsername, ENT_QUOTES, 'UTF-8');

$displayBlurb = trim($user['blurb'] ?? '');
if ($displayBlurb === '') {
    $displayBlurb = 'This user has not set up their profile yet.';
}
$displayBlurbEsc = htmlspecialchars($displayBlurb, ENT_QUOTES, 'UTF-8');

// Check if banned
$stmt = $conn->prepare("SELECT * FROM bans WHERE userid = ?");
$stmt->bind_param("i", $userIdToDisplay);
$stmt->execute();
$banResult = $stmt->get_result();
if ($banResult->num_rows > 0) {
    echo '<div id="Body"><p>&nbsp;</p><p>&nbsp;</p><h2 style="text-align: center">The item you requested does not exist</h2><title>emeraldnews | Missing Item</title><p>&nbsp;</p><p>&nbsp;</p></div>';
    include $_SERVER["DOCUMENT_ROOT"] . "/api/WebsiteBuild/footer.php";
    exit;
}
$stmt->close();

// Fetch stats (friends, forum posts, badges, etc.)
$friendStmt = $conn->prepare("SELECT * FROM friends WHERE (user_from = ? AND arefriends = '1') OR (user_to = ? AND arefriends = '1')");
$friendStmt->bind_param("ii", $userIdToDisplay, $userIdToDisplay);
$friendStmt->execute();
$friendResult = $friendStmt->get_result();
$friendcount = $friendResult->num_rows;
$friendsweek = 0;
while ($friend = $friendResult->fetch_assoc()) {
    $friendTime = strtotime((string)($friend['time_friended'] ?? ''));
    if ($friendTime !== false && (time() - $friendTime) <= 604800) {
        $friendsweek++;
    }
}
$friendStmt->close();

$forumStmt = $conn->prepare("SELECT * FROM forum WHERE author = ?");
$forumStmt->bind_param("i", $userIdToDisplay);
$forumStmt->execute();
$forumResult = $forumStmt->get_result();
$forumposts = $forumResult->num_rows;
$forumpostsweek = 0;
while ($post = $forumResult->fetch_assoc()) {
    $postTime = strtotime((string)($post['timestamp'] ?? ''));
    if ($postTime !== false && (time() - $postTime) <= 604800) {
        $forumpostsweek++;
    }
}
$forumStmt->close();

$badgeStmt = $conn->prepare("SELECT * FROM ownedbadges WHERE userid = ?");
$badgeStmt->bind_param("i", $userIdToDisplay);
$badgeStmt->execute();
$badgeResult = $badgeStmt->get_result();
$badgeStmt->close();

$placeStmt = $conn->prepare("SELECT * FROM games WHERE creator_id = ?");
$placeStmt->bind_param("i", $userIdToDisplay);
$placeStmt->execute();
$placeResult = $placeStmt->get_result();
$ownedplaces = $placeResult->num_rows;
$placeStmt->close();

// Profile views (for non-home only)
$profileviews = 0;
$profileviewsweek = 0;
if (!$home) {
    $viewStmt = $conn->prepare("SELECT * FROM user_views WHERE userid = ?");
    $viewStmt->bind_param("i", $userIdToDisplay);
    $viewStmt->execute();
    $viewResult = $viewStmt->get_result();
    $profileviews = $viewResult->num_rows;
    while ($view = $viewResult->fetch_assoc()) {
        $viewTime = strtotime((string)($view['timestamp'] ?? ''));
        if ($viewTime !== false && (time() - $viewTime) <= 604800) {
            $profileviewsweek++;
        }
    }
    $viewStmt->close();

    // Log profile view if logged in and not already viewed
    if ($logged == "yes" && $userIdToDisplay != $_USER['id']) {
        $profileviewCheckStmt = $conn->prepare("SELECT * FROM user_views WHERE userid = ? AND viewerid = ?");
        $profileviewCheckStmt->bind_param("ii", $userIdToDisplay, $_USER['id']);
        $profileviewCheckStmt->execute();
        $profileviewCheckResult = $profileviewCheckStmt->get_result();
        if ($profileviewCheckResult->num_rows == 0) {
            $insertViewStmt = $conn->prepare("INSERT INTO user_views (userid, viewerid, timestamp) VALUES (?, ?, NOW())");
            $insertViewStmt->bind_param("ii", $userIdToDisplay, $_USER['id']);
            $insertViewStmt->execute();
            $insertViewStmt->close();
            // Refresh page to update view count
            header("Location: /User.aspx?ID=" . $userIdToDisplay);
            exit;
        }
        $profileviewCheckStmt->close();
    }
}

// Friendship check (for non-home only)
$arefriends = false;
if (!$home && $logged == "yes" && $userIdToDisplay != $_USER['id']) {
    $friendCheckStmt = $conn->prepare("SELECT * FROM friends WHERE ((user_from = ? AND user_to = ?) OR (user_to = ? AND user_from = ?)) AND arefriends = '1'");
    $friendCheckStmt->bind_param("iiii", $userIdToDisplay, $_USER['id'], $userIdToDisplay, $_USER['id']);
    $friendCheckStmt->execute();
    $friendCheckResult = $friendCheckStmt->get_result();
    $arefriends = ($friendCheckResult->num_rows > 0);
    $friendCheckStmt->close();
}

$onlinetext = ($user['lastseen'] + 300 <= time()) ? "<span class=\"UserOfflineMessage\">[ Offline ]</span>" : "<span class=\"UserOnlineMessage\">[ Online: Website ]</span>";
?>
<style>
#FavoritesContent {
    background: #eee;
    align-items: center;
    display: flex;
    flex-direction: column-reverse;
}
#deleteFavorite {
    position: absolute;
    top: 1px;
    right: 1px;
    background-color:#EEE;
    border:solid 1px #000;
    color:blue;font-size:10px;
    font-weight:lighter;
}
#deleteFavorite:hover {
    cursor: pointer;
}
#ProfilePane {
    background: #AEC0D9;
}
#UserPlaces h4 {
    background-color: #6e99c9;
    color: #fff;
    font-family: Verdana,Sans-Serif;
    font-size: 1.4em;
    font-weight: 400;
    letter-spacing: .1em;
    line-height: 1.5em;
    margin: 0;
}
#UserAssetsPane #UserAssets h4, #UserBadgesPane #UserBadges h4, #UserStatisticsPane #UserStatistics h4, #FavoritesPane #Favorites h4 {
    background-color: #ccc;
    border-bottom: solid 1px #000;
    color: #333;
    font-family: Comic Sans MS,Verdana,Sans-Serif;
    margin: 0;
    text-align: center;
}
#ProfilePane span, #ProfilePane p, #ProfilePane a, #FriendsPane span, #FriendsPane p, #FriendsPane a {
    color: black;
}
#FriendsPane, #FavoritesPane {
    clear: right;
    margin: 10px 0 0;
    background: #fff;
}
#FavoritesPane{
    color: #000;
  border: solid 1px #000;
}
#FavoritesContent {
    background: #eee;
}
#UserPlaces .PanelFooter, #Favorites .PanelFooter {
    background-color: #fff;
    border-top: solid 1px #000;
    color: #333;
    font-family: Verdana,Sans-Serif;
    margin: 0;
    padding: 3px;
    text-align: center;
}
.modalBackground {
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(100,100,100,0.25);
  opacity: 1;
}
.modalPopup {
    color: black;
    background-color: #ffffdd;
    border-width: 3px;
    border-style: solid;
    border-color: Gray;
    padding: 3px;
    box-shadow: 5px 5px;
    text-align: center;
    width: 27em;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
}
#Header a, #Header a:visited, #Header a:active{
    color: black;
}
.Title {
    color: black;
}
#UserContainer span, #UserContainer p, #UserContainer td {
    color: black;
}
</style>

<div id="Body">
<?php if ($home) { ?>
    <?php if ($logged == "yes") { ?>
    <script>
      var sid;
      var token;
      var sid2;
      var activeTab = 1;
      function showTab(num) {
        $("#tab" + activeTab).removeClass("Active");
        $("#tabb" + activeTab).hide();
        activeTab = num;
        $("#tab" + num).addClass("Active");
        $("#tabb" + num).show();
      }
      function JoinGame(game) {
        $("#joiningGameDiag").show();
        $.post("/api/beta/requestgame", {placeId:game}, function(data) {
          if (isNaN(data) == false) {
            sid = data;
            setTimeout(function() {  
              $("#Spinner").hide();
              $("#Requesting").html("<center>Something went wrong, try again later.</center>"); 
            }, 1500);
          } else if (data.startsWith("Success")) {
            $("#Requesting").html("<center>The server is ready. Joining the game...</center>");
            token = data;
            location.href = "/api/beta/startgame.php?id=" + game;
            setTimeout(function() { closeModal(); }, 2000);
          } else {
            $("#Spinner").hide();
            $("#Requesting").html("<center>" + data + "</center>");
          }
        });
      }
      function checkifProgressChanged() {
        $.getJSON("" + sid, function(result) {
          $("#Requesting").html(result.msg);
          if (result.token == null) {
            if (result.check == true) {
              setTimeout(function() { checkifProgressChanged() }, 750);
            } else {
              $("#Spinner").hide();
            }
          } else {
            token = result.token;
            location.href = "" + token;
            setTimeout(function() { closeModal(); }, 2000);
          }
        });
      }
      function joinServer() {
        $.getJSON("" + sid2, function(result) {
          $("#Requesting").html(result.msg);
          if (result.token != null) {
            token = result.token;
            location.href = "" + token;
            setTimeout(function() { closeModal(); }, 2000);
          }
        });
      }
      function closeModal() {
        $("#joiningGameDiag").hide();
        $("#Spinner").show();
        $("#Requesting").html("Requesting a server");
      }
    </script>
    <?php } ?>
    <div id="UserContainer">
      <div id="LeftBank">
        <div id="ProfilePane">
          <table width="442" cellspacing="0" cellpadding="6">
            <tbody>
              <tr>
                <td>
                  <font face="Verdana" id="1"><span class="Title"><?= htmlspecialchars($current_message) ?>, <?= htmlspecialchars($_USER['username']) ?>!</span><br></font>
                </td>
              </tr>
              <tr>
                <td>
                  <font face="Verdana" id="2">
                    <span>Your e.m account:</span><br>
                    <a href="/User.aspx?ID=<?= $_USER['id'] ?>">https://emeraldolds.glados.pro/User.aspx?ID=<?= $_USER['id'] ?></a>
                    <br>
                    <p>these are YOUR options.</p>
                    <div style="text-align:center;">
                      <font face="Verdana" id="3">
                        <p><a href="/my/messages/inbox">Inbox</a>&nbsp;</p>
                        <p><a href="/my/Profile.aspx">Edit Profile</a></p>
                        <p><a href="/my/accountbalance">Account Balance</a></p>
                        <p><a href="/User.aspx?ID=<?= $_USER['id'] ?>">View Public Profile</a></p>
                        <?php if ($_USER['administrator'] == "yes") { ?>
                          <p><a href="/games/create">Create News</a></p>
                        <?php } ?>
                        <p><a href="/my/referrals/Default.aspx">referrals</a></p>
                        <p><a href="/my/accountbalance/trade">Trade Currency</a></p>
                        <p><a href="/my/messages/inbox">my messages</a></p>
                        <div class="data-saving-toggle">
                          <?php if ($dataSavingModeEnabled) { ?>
                            <p style="margin-top: 1rem;">Data saving mode is currently <strong>enabled</strong>.</p>
                            <form method="post" action="/User.aspx" class="data-saving-form">
                              <input type="hidden" name="toggle_data_saving" value="disable">
                              <button type="submit">Turn off data saving mode</button>
                            </form>
                          <?php } else { ?>
                            <p style="margin-top: 1rem;">Need a lighter experience?</p>
                            <form method="post" action="/User.aspx" class="data-saving-form">
                              <input type="hidden" name="toggle_data_saving" value="enable">
                              <button type="submit">Enable data saving mode</button>
                            </form>
                          <?php } ?>
                        </div>
                      </font>
                    </div>
                  </font>
                </td>
              </tr>
            </tbody>
          </table>
          <?php if ($_USER['MembershipType'] == 'BuildersClub') { ?>
            <div class="Header">
              <h4>the very cool club until <?= date('jS F Y', $_USER['MembershipExpire'] + 2629800); ?></h4>
            </div>
          <?php } ?>
        </div>
        <div id="UserPageLargeRectangleAd">
          <div id="RobloxLargeRectangleAd"></div>
        </div>
        <div id="UserBadgesPane">
          <div id="UserBadges">
            <h4><a href="/Badges.aspx">Badges</a></h4>
            <table cellspacing="0" border="0" align="Center">
              <tbody>
                <tr>
                  <?php 
                  if ($badgeResult->num_rows == 0) {
                      echo '<div class="NoResults"><span class="NoResults">You don\'t have any emeraldnews badges</span></div>';
                  }
                  $counter = 0;
                  while ($row = $badgeResult->fetch_assoc()) {
                      $badgeStmt = $conn->prepare("SELECT * FROM badges WHERE id = ?");
                      $badgeStmt->bind_param("i", $row['badgeid']);
                      $badgeStmt->execute();
                      $badgeRes = $badgeStmt->get_result();
                      $badge = $badgeRes->fetch_assoc();
                      $badgeStmt->close();
                  ?>
                  <td>
                    <div class="Badge">
                      <div class="BadgeImage">
                        <a href="/Badges.aspx">
                          <img src="/Thumbs/Badge.aspx?assetId=<?= $row['badgeid'] ?>"
                               title="<?= htmlspecialchars($badge['description']) ?>"
                               alt="<?= htmlspecialchars($badge['name']) ?>">
                        </a>
                        <br>
                        <div class="BadgeLabel">
                          <a href="/Badges.aspx"><?= htmlspecialchars($badge['name']) ?></a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <?php 
                      $counter++;
                      if ($counter > 3) {
                          $counter = 0;
                          echo '</tr><tr>';
                      }
                  } 
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <?php if (getenv('AD_KEY_GETAD') && getenv('AD_SCRIPT_URL_GETAD')) { ?>
        <script type="text/javascript">
          atOptions = {
            'key' : '<?= htmlspecialchars(getenv('AD_KEY_GETAD')) ?>',
            'format' : 'iframe',
            'height' : 60,
            'width' : 468,
            'params' : {}
          };
        </script>
        <script type="text/javascript" src="<?= htmlspecialchars(getenv('AD_SCRIPT_URL_GETAD')) ?>"></script>
        <?php } ?>
      </div>
      <div id="RightBank">
        <!-- Placeholder for places or other content -->
      </div>
    </div>
    <div id="FriendsPane">
      <div id="Friends">
        <h4 style="text-align: center;color: black;">My friends <a href="/Friends.aspx?UserID=<?= $_USER['id'] ?>">See all <?= $friendcount ?> friends.</a> (<a href="/my/EditFriends.aspx">Edit</a>)</h4>
        <table cellspacing="0" align="Center" border="0" style="border-collapse:collapse;width: 360px;">
          <tbody>
            <tr>
              <?php
              if ($friendcount < 1) {
                  echo "<p style=\"padding: 10px 10px 10px 10px; text-align:center; color: black;\">You don't have any emeraldnews friends.</p>";
              } else {
                  echo "<div class=\"columns\">";
                  $total = 0;
                  $row = 0;
                  $resultsperpage = 6;
                  $thispagefirstresult = 0; // Simplified for home page; adjust if paginated
                  $friendq = $conn->prepare("SELECT * FROM friends WHERE (user_from = ? AND arefriends='1') OR (user_to = ? AND arefriends='1') LIMIT ?");
                  $friendq->bind_param("iii", $_USER['id'], $_USER['id'], $resultsperpage);
                  $friendq->execute();
                  $friendqResult = $friendq->get_result();
                  while ($friend = $friendqResult->fetch_assoc()) {
                      if ($total <= 5) {
                          $friendid = ($friend['user_from'] == $_USER['id']) ? $friend['user_to'] : $friend['user_from'];
                          $friendUserStmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
                          $friendUserStmt->bind_param("i", $friendid);
                          $friendUserStmt->execute();
                          $finfo = $friendUserStmt->get_result()->fetch_assoc();
                          $friendUserStmt->close();
                          $onlinetest = ($finfo['lastseen'] + 300 <= time()) ? "<img src=\"/images/OnlineStatusIndicator_IsOffline.gif\" style=\"border-width:0px;\">" : "<img src=\"/images/OnlineStatusIndicator_IsOnline.gif\" style=\"border-width:0px;\">";
                          echo "<td style=\"display: inline-block\"><div class=\"Friend\">
                              <div class=\"Avatar\">
                                  <a title=\"{$finfo['username']}\" href=\"/User.aspx?ID=$friendid\" style=\"display:inline-block;max-height:100px;max-width:100px;cursor:pointer;\">
                                      <img src=\"/Thumbs/Avatar.ashx?assetId=$friendid&isSmall=1\" width=\"95\" border=\"0\" alt=\"{$finfo['username']}\">
                                  </a>
                              </div>
                              <div class=\"Summary\">
                                  <span class=\"OnlineStatus\">$onlinetest</span>
                                  <span class=\"Name\"><a href=\"/User.aspx?ID=$friendid\">{$finfo['username']}</a></span>
                              </div>
                          </div></td>";
                          $total++;
                          $row++;
                          if ($row >= 3) {
                              echo "</div><div class=\"columns\">";
                              $row = 0;
                          }
                      }
                  }
                  echo "</div>";
                  $friendq->close();
              }
              ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div id="FavoritesPane">
      <div id="Favorites">
        <h4>Favorites</h4>
        <div id="FavoritesContent">this user doesnt have any news favourited.</div>
        <div class="PanelFooter">
          Category:&nbsp;
          <select id="FavCategories">
            <option selected="selected" value="0">news</option>
          </select>
        </div>
      </div>
    </div>
<?php } else { ?>
    <title><?= $displayUsernameEsc ?>'s emeraldnews Home Page</title>
    <div id="UserContainer">
      <div id="LeftBank">
        <div id="ProfilePane">
          <table width="442" cellspacing="0" cellpadding="6">
            <tbody>
              <tr>
                <td>
                  <span class="Title"><?= $displayUsernameEsc ?></span><br>
                  <?= $onlinetext ?>
                </td>
              </tr>
              <tr>
                <td>
                  <span><?= $displayUsernameEsc ?>'s e.m. account:</span><br>
                  <a href="/User.aspx?ID=<?= $user['id'] ?>">https://emeraldolds.glados.pro/User.aspx?ID=<?= $user['id'] ?></a><br>
                  <br>
                  <div style="left: 0px; float: left; position: relative; top: 0px">
                    <br>
                  </div>
                  <?php if ($logged == "yes") { 
                      if ($user['id'] != $_USER['id']) { ?>
                          <p><a href="/my/PrivateMessage.aspx?RecipientID=<?= $user['id'] ?>">Send Message</a></p>
                          <?php if (!$arefriends) { ?>
                              <p><a href="/my/FriendInvitation.aspx?RecipientID=<?= $user['id'] ?>">Send Friend Request</a></p>
                          <?php } ?>
                      <?php } else { ?>
                          <h2>Your Profile</h2>
                      <?php } 
                  } else { ?>
                      <p><a href="/Login/Default.aspx">Send Message</a></p>
                      <p><a href="/Login/Default.aspx">Send Friend Request</a></p>
                  <?php } ?>
                  <p style="width:430px;"><span style="white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;"></span></p><hr><p><?= $displayBlurbEsc ?></p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="UserPageLargeRectangleAd">
          <div id="RobloxLargeRectangleAd"></div>
        </div>
        <div id="UserBadgesPane">
          <div id="UserBadges">
            <h4><a href="/Badges.aspx">Badges</a></h4>
            <table cellspacing="0" border="0" align="Center">
              <tbody>
                <tr>
                  <?php 
                  if ($badgeResult->num_rows == 0) {
                      echo '<div class="NoResults"><span class="NoResults">' . $displayUsernameEsc . ' does not have any emeraldnews badges.</span></div>'; 
                  }
                  $counter = 0;
                  while ($row = $badgeResult->fetch_assoc()) {
                      $badgeStmt = $conn->prepare("SELECT * FROM badges WHERE id = ?");
                      $badgeStmt->bind_param("i", $row['badgeid']);
                      $badgeStmt->execute();
                      $badgeRes = $badgeStmt->get_result();
                      $badge = $badgeRes->fetch_assoc();
                      $badgeStmt->close();
                  ?>
                  <td>
                    <div class="Badge">
                      <div class="BadgeImage">
                        <a href="/Badges.aspx">
                          <img src="/Thumbs/Badge.aspx?assetId=<?= $row['badgeid'] ?>"
                               title="<?= htmlspecialchars($badge['description']) ?>"
                               alt="<?= htmlspecialchars($badge['name']) ?>">
                        </a>
                        <br>
                        <div class="BadgeLabel">
                          <a href="/Badges.aspx"><?= htmlspecialchars($badge['name']) ?></a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <?php 
                      $counter++;
                      if ($counter > 3) {
                          $counter = 0;
                          echo '</tr><tr>';
                      }
                  } 
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <?php if (getenv('AD_KEY_GETAD') && getenv('AD_SCRIPT_URL_GETAD')) { ?>
        <script type="text/javascript">
          atOptions = {
            'key' : '<?= htmlspecialchars(getenv('AD_KEY_GETAD')) ?>',
            'format' : 'iframe',
            'height' : 60,
            'width' : 468,
            'params' : {}
          };
        </script>
        <script type="text/javascript" src="<?= htmlspecialchars(getenv('AD_SCRIPT_URL_GETAD')) ?>"></script>
        <?php } ?>
      </div>
      <div id="RightBank">
        <?php 
        $copyPlaceStmt = $conn->prepare("SELECT * FROM games WHERE creator_id = ? AND copy != 0");
        $copyPlaceStmt->bind_param("i", $userIdToDisplay);
        $copyPlaceStmt->execute();
        $copyPlaceResult = $copyPlaceStmt->get_result();
        if ($copyPlaceResult->num_rows == 0) { ?>
          <div id='UserPlacesPane'>
            <p style='padding: 10px 10px 10px 10px;'>Hello! this box would be used for something soon..</p>       
          </div>
        <?php } 
        $copyPlaceStmt->close();
        ?>
      </div>
    </div>
    <div id="FriendsPane">
      <div id="Friends">
        <?php if ($friendcount < 1) { ?>
          <p style="padding: 10px 10px 10px 10px; color: black;"><?= $displayUsernameEsc ?> doesn't have any emeraldnews friends. haha...</p>
        <?php } else { ?>
          <h4><?= $displayUsernameEsc ?>'s friends <a href="/Friends.aspx?UserID=<?= $user['id'] ?>">See all <?= $friendcount ?></a></h4>          
          <table cellspacing="0" align="Center" border="0" style="border-collapse:collapse;width: 370px;">
            <tbody>
              <tr>
                <?php
                echo "<div class=\"columns\">";
                $total = 0;
                $row = 0;
                $resultsperpage = 6;
                $thispagefirstresult = 0; // Simplified; adjust if paginated
                $friendq = $conn->prepare("SELECT * FROM friends WHERE (user_from = ? AND arefriends='1') OR (user_to = ? AND arefriends='1') LIMIT ?");
                $friendq->bind_param("iii", $user['id'], $user['id'], $resultsperpage);
                $friendq->execute();
                $friendqResult = $friendq->get_result();
                while ($friend = $friendqResult->fetch_assoc()) {
                    if ($total <= 5) {
                        $friendid = ($friend['user_from'] == $user['id']) ? $friend['user_to'] : $friend['user_from'];
                        $friendUserStmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
                        $friendUserStmt->bind_param("i", $friendid);
                        $friendUserStmt->execute();
                        $finfo = $friendUserStmt->get_result()->fetch_assoc();
                        $friendUserStmt->close();
                        $onlinetest = ($finfo['lastseen'] + 300 <= time()) ? "<img src=\"/images/OnlineStatusIndicator_IsOffline.gif\" style=\"border-width:0px;\">" : "<img src=\"/images/OnlineStatusIndicator_IsOnline.gif\" style=\"border-width:0px;\">";
                        echo "<td style=\"display: inline-block\"><div class=\"Friend\">
                            <div class=\"Avatar\">
                                <a title=\"{$finfo['username']}\" href=\"/User.aspx?ID=$friendid\" style=\"display:inline-block;max-height:100px;max-width:100px;cursor:pointer;\">
                                    <img src='/Thumbs/Avatar.ashx?assetId={$finfo['id']}&isSmall=1' width='100'>
                                </a>
                            </div>
                            <div class=\"Summary\">
                                <span class=\"OnlineStatus\">$onlinetest</span>
                                <span class=\"Name\"><a href=\"/User.aspx?ID=$friendid\">{$finfo['username']}</a></span>
                            </div>
                        </div></td>";
                        $total++;
                        $row++;
                        if ($row >= 3) {
                            echo "</div><div class=\"columns\">";
                            $row = 0;
                        }
                    }
                }
                echo "</div>";
                $friendq->close();
                ?>
              </tr>
            </tbody>
          </table>
        <?php } ?>
      </div>
    </div>
    <div id="FavoritesPane">
      <div id="Favorites">
        <h4>Favorites</h4>
        <div id="FavoritesContent">this user doesnt have any news favourited.</div>
        <div class="PanelFooter">
          Category:&nbsp;
          <select id="FavCategories">
            <option selected="selected" value="0">news</option>
          </select>
        </div>
      </div>
    </div>
<?php } ?>
<div class="modalBackground" style="display: none">
    <div id="ClientInstaller" class="modalPopup" style="display: none">
      <div style="padding: 0 0 1em 0">
          <h3>Running emeraldnews</h3>
          <p>A window will open asking what you want to do with a file called "emeraldnews.exe".</p>
          <input type="submit" value="Install Again" id="ClientInstaller_InstallAgainButton" class="Button">
          <input type="submit" value="Cancel" id="ClientInstaller_CancelButton" class="Button">
          <div id="ClientInstaller_launcherDiv"></div>
      </div>
    </div>
    <div id="PlaceLauncher" class="modalPopup" style="display: none;">
      <div style="margin: 1.5em">
        <div id="Spinner" style="float:left;margin:0 1em 1em 0">
          <img src="/images/ProgressIndicator2.gif" style="border-width:0px;">
        </div>
        <div id="Requesting" style="display: inline">
          Requesting a server
        </div>
        <div style="text-align: center; margin-top: 1em">
          <input id="Cancel" type="button" class="Button" value="Cancel">
        </div>
      </div>
    </div>
</div>
<script>
altpanelShown = true;
function toggleAltPanel() {
  if (altpanelShown) {
    $("#AltPanel").css("height", 19);
    $("#AltPanel").css("overflow", "hidden");
    $('#AltPanelToggleIcon').attr("src", "/images/ExpandButton.jpg");
    altpanelShown = false;
  } else {
    $("#AltPanel").css("height", 200);
    $("#AltPanel").css("overflow", "auto");
    $('#AltPanelToggleIcon').attr("src", "/images/MinimizeButton.jpg");
    altpanelShown = true;
  }
}
function getInventory(type, page, event) {
  if (page == undefined) { page = 1; }
  if (event != undefined) { event.preventDefault(); }
  $.post("/api/user/getUserInventory", {uid: <?= $userIdToDisplay ?>, type: type, page: page, home: <?= $home ? 'true' : 'false' ?>}, function(data) {
    $("#AssetsContent").empty();
    $("#AssetsContent").html(data);
  }).fail(function() {
    $("#AssetsContent").text("An error occurred while fetching this user's inventory");
  });
  $('*[data-id]').removeClass().addClass("AssetsMenuItem");
  $('*[data-id]').children().removeClass().addClass("AssetsMenuButton");
  $('*[data-id="'+type+'"]').removeClass().addClass("AssetsMenuItem_Selected");
  $('*[data-id="'+type+'"]').children().removeClass().addClass("AssetsMenuButton_Selected");
}
function getFavs(type, page, event) {
  if (page == undefined) { page = 1; }
  if (event != undefined) { event.preventDefault(); }
  $.post("/api/user/getUserFavourites", {uid: <?= $userIdToDisplay ?>, type: type, page: page}, function(data) {
    $("#FavoritesContent").empty();
    $("#FavoritesContent").html(data);
  }).fail(function() {
    $("#FavoritesContent").html("Failed to get favourites");
  });
}
$(function() {
  $('.AssetsMenuItem').on('click', this, function() { getInventory($(this).attr("data-id")); });
  $("#FavCategories").on("change", function() { getFavs(this.value); });
  getFavs(0);
  getInventory(1);
});
function closemodal() {
  const element = document.getElementsByClassName('modalBackground')[0];
  const placelauncher = document.getElementById('PlaceLauncher');
  element.style.display = 'none';
  placelauncher.style.display = 'none';
}
function playGame(placeId) {
  const element = document.getElementsByClassName('modalBackground')[0];
  element.style.display = 'block';
  const placelauncher = document.getElementById('PlaceLauncher');
  placelauncher.style.display = 'block';
  $.post("/api/user/playGame", {game: placeId}, function(data) {
    console.log(data.success);
    if (data.success == 1) {
      $("#Requesting").empty();
      $("#Requesting").html("The server is ready. Joining the game...");
      setTimeout(function() { closemodal(); }, 5000);
    } else {
      $("#Requesting").empty();
      $("#Requesting").html(data.message);
      setTimeout(function() { closemodal(); }, 2000);
    }
  }).fail(function() {
    $("#Requesting").empty();
    $("#Requesting").html("Failed to request game.");
    setTimeout(function() { closemodal(); }, 2000);
  });
};
</script>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/api/WebsiteBuild/footer.php"; ?>
