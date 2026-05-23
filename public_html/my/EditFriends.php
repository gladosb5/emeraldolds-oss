<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$userid = $_USER['id'];

$userq = mysqli_query($conn, "SELECT * FROM users WHERE id='$userid'") or die(mysqli_error($conn));

if (mysqli_num_rows($userq) < 1) {
  ?> <div id="Body">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 style="text-align: center">An Error occured! We're sorry.</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
				</div> <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
				die();
}

if ($userid < 1) {
  ?> <div id="Body">
<p>&nbsp;</p>
<p>&nbsp;</p>
<h2 style="text-align: center">An Error occured! We're sorry.</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
				</div> <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php";
				die();
}

$itemcheck = mysqli_query($conn, "SELECT * FROM users WHERE id='$userid'") or die(mysqli_error($conn));
$item = mysqli_fetch_assoc($itemcheck);



if(isset($_POST['Delete'])){
	$id = (int)$_POST['FriendID'];
	
	if($id < 1){
		echo "invalid id";
	}else{
	
		$friendq = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$id' AND `user_to` = '{$_USER['id']}' AND `arefriends`='1') OR (`user_to` = '$id' AND `user_from` = '{$_USER['id']}' AND `arefriends`='1')") or die(mysqli_error($conn));
		
		if(mysqli_num_rows($friendq) == 1){
			$remfriendq = mysqli_query($conn, "DELETE FROM friends WHERE (`user_from` = '$id' AND `user_to` = '{$_USER['id']}' AND `arefriends`='1') OR (`user_to` = '$id' AND `user_from` = '{$_USER['id']}' AND `arefriends`='1')") or die(mysqli_error($conn));
		}else{
			echo "you are not friend with this user.";
		}
	}
}



?>
 <title>My Friends</title>
<div id="Body">
<div id="FriendsContainer">
  <div id="Friend">
    <style>
    body {
    font: normal 8pt/normal 'Comic Sans MS',Verdana,sans-serif;
    margin-top: 0;
    text-transform: none;
    text-decoration: none;
}
    h4 {
    font-size: 10pt;
    font-weight: bold;
    line-height: 1em;
    margin-bottom: 5px;
    margin-top: 5px;
}
</style>
<?php
$friendnew = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$userid' AND `arefriends`='1') OR  (`user_to` = '$userid' AND `arefriends`='1')") or die(mysqli_error($conn));

$friendcount = mysqli_num_rows($friendnew);
?>
        <h4>My Friends <?php
            if ($friendcount < 1) {
              echo "";
            } else {
            echo"($friendcount)"; 
            }
            ?></h4>
    <div align="center">
                      </div>
    <table cellspacing="0" border="0" align="Center">
      <tbody>
        <tr>
<?php
     $resultsperpage = 5;
                    $check = mysqli_query($conn, "SELECT * FROM users");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    if(!isset($_GET['page'])) {
                        $page = 1;
                    }else{
                        $page = (int)$_GET['page'];
                    }

                    $thispagefirstresult = ($page-1)*$resultsperpage;

$friendq = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$userid' AND `arefriends`='1') OR  (`user_to` = '$userid' AND `arefriends`='1') LIMIT ".$thispagefirstresult.",".$resultsperpage) or die(mysqli_error($conn));

$arefriends = false;


            if ($friendcount < 1) {
              echo "<center><p style=\"padding: 10px 10px 10px 10px;\">bro has no friends and prob in real life.</p></center>";
            } else {
              echo "<div class=\"columns\">";
              $total = 0;
              $row = 0;
              
              while ($friend = mysqli_fetch_assoc($friendq)) {
                if ($total <= 5) {


                $friendid = 0;

                if ($friend['user_from'] == $userid) {
                  $friendid = $friend['user_to'];
                } else {
                  $friendid = $friend['user_from'];
                }

                $friend_online = mysqli_query($conn, "SELECT * FROM users WHERE id='$friendid'") or die(mysqli_error($conn));
                
                $finfo = mysqli_fetch_assoc($friend_online);

                $usr = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='$friendid' LIMIT ".$thispagefirstresult.",".$resultsperpage));
                echo "<td><div class=\"Friend\">
                                                                <div class=\"Avatar\">
                                                                    <a title=\"{$usr['username']}\" href=\"/User.aspx?ID=$friendid\" style=\"display:inline-block;max-height:100px;max-width:100px;cursor:pointer;\">
                        <img height=\"100\" width=\"100\" src=\"/Thumbs/Avatar.ashx?assetId={$usr['id']}&isSmall=1\" frameborder=\"0\" scrolling=\"no\"></img>
                                                                    </a>
                                                                </div>                          <div class=\"Summary\">
                                                                                                                <span class=\"OnlineStatus\">
              ";                          
              $onlinetest = ($finfo['lastseen'] + 300 <= time()) ? "<img src=\"/images/OnlineStatusIndicator_IsOffline.gif\" style=\"border-width:0px;\">" : "<img src=\"/images/OnlineStatusIndicator_IsOnline.gif\" style=\"border-width:0px;\">";
              echo"$onlinetest</span>
                                                                                                                <span class=\"Name\"><a href=\"/User.aspx?ID=$friendid\">{$usr['username']}</a></span>
                                                                </div><div class=\"Options\">
                            <form method=\"post\">
                                                                <input name=\"FriendID\" type=\"hidden\" value=\"{$usr['id']}\">
                                <input class=\"Button\" name=\"Delete\" type=\"submit\" value=\"Delete\" >
                            </form>
                        </div>
                                                            </div></td>";
                $total++;
                $row++;

                if ($row >= 3) {
                  $row = 0;
                }
              }}
            }
            ?>

                                                                  
                                                                  </tr>
                                                                  
  <tr>
<?php
     $resultsperpage = 5;
                    $check = mysqli_query($conn, "SELECT * FROM users");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    if(!isset($_GET['page'])) {
                        $page = 2;
                    }else{
                        $page = (int)$_GET['page'];
                    }

                    $thispagefirstresult = ($page-1)*$resultsperpage;

$friendq = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$userid' AND `arefriends`='1') OR  (`user_to` = '$userid' AND `arefriends`='1') LIMIT ".$thispagefirstresult.",".$resultsperpage) or die(mysqli_error($conn));

$friendnew = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$userid' AND `arefriends`='1') OR  (`user_to` = '$userid' AND `arefriends`='1')") or die(mysqli_error($conn));

$friendcount = mysqli_num_rows($friendnew);

$arefriends = false;


            if ($friendcount < 1) {
                } else {
              echo "<div class=\"columns\">";
              $total = 0;
              $row = 0;
              
              while ($friend = mysqli_fetch_assoc($friendq)) {
                if ($total <= 5) {


                $friendid = 0;

                if ($friend['user_from'] == $userid) {
                  $friendid = $friend['user_to'];
                } else {
                  $friendid = $friend['user_from'];
                }

                $friend_online = mysqli_query($conn, "SELECT * FROM users WHERE id='$friendid'") or die(mysqli_error($conn));
                
                $finfo = mysqli_fetch_assoc($friend_online);

                $usr2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='$friendid' LIMIT ".$thispagefirstresult.",".$resultsperpage));
                echo "<td><div class=\"Friend\">
                                                                <div class=\"Avatar\">
                                                                    <a title=\"{$finfo['username']}\" href=\"/User.aspx?ID=$friendid\" style=\"display:inline-block;max-height:100px;max-width:100px;cursor:pointer;\">
                        <img height=\"100\" width=\"100\" src=\"/Thumbs/Avatar.ashx?assetId={$finfo['id']}&isSmall=1\" frameborder=\"0\" scrolling=\"no\"></img>
                                                                    </a>
                                                                </div>                          <div class=\"Summary\">
                                                                                                                <span class=\"OnlineStatus\">
              ";                          
              $onlinetest = ($finfo['lastseen'] + 300 <= time()) ? "<img src=\"/images/OnlineStatusIndicator_IsOffline.gif\" style=\"border-width:0px;\">" : "<img src=\"/images/OnlineStatusIndicator_IsOnline.gif\" style=\"border-width:0px;\">";
              echo"$onlinetest</span>
                                                                                                                <span class=\"Name\"><a href=\"/User.aspx?ID=$friendid\">{$finfo['username']}</a></span>
                                                                </div><div class=\"Options\">
                            <form method=\"post\">
                                                                <input name=\"FriendID\" type=\"hidden\" value=\"{$finfo['id']}\">
                                <input class=\"Button\" name=\"Delete\" type=\"submit\" value=\"Delete\" >
                            </form>
                        </div>
                                                            </div></td>";
                $total++;
                $row++;

                if ($row >= 3) {
                  $row = 0;
                }
              }}
            }
            ?>

                                                                  
                                                                  </tr>
  <tr>
<?php
     $resultsperpage = 5;
                    $check = mysqli_query($conn, "SELECT * FROM users");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    if(!isset($_GET['page'])) {
                        $page = 3;
                    }else{
                        $page = (int)$_GET['page'];
                    }

                    $thispagefirstresult = ($page-1)*$resultsperpage;

$friendq = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$userid' AND `arefriends`='1') OR  (`user_to` = '$userid' AND `arefriends`='1') LIMIT ".$thispagefirstresult.",".$resultsperpage) or die(mysqli_error($conn));

$friendnew = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$userid' AND `arefriends`='1') OR  (`user_to` = '$userid' AND `arefriends`='1')") or die(mysqli_error($conn));

$friendcount = mysqli_num_rows($friendnew);

$arefriends = false;


            if ($friendcount < 1) {
              } else {
              echo "<div class=\"columns\">";
              $total = 0;
              $row = 0;
              
              while ($friend = mysqli_fetch_assoc($friendq)) {
                if ($total <= 5) {


                $friendid = 0;

                if ($friend['user_from'] == $userid) {
                  $friendid = $friend['user_to'];
                } else {
                  $friendid = $friend['user_from'];
                }

                $friend_online = mysqli_query($conn, "SELECT * FROM users WHERE id='$friendid'") or die(mysqli_error($conn));
                
                $finfo = mysqli_fetch_assoc($friend_online);

                $usr3 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='$friendid' LIMIT ".$thispagefirstresult.",".$resultsperpage));
                echo "<td><div class=\"Friend\">
                                                                <div class=\"Avatar\">
                                                                    <a title=\"{$finfo['username']}\" href=\"/User.aspx?ID=$friendid\" style=\"display:inline-block;max-height:100px;max-width:100px;cursor:pointer;\">
                        <img height=\"100\" width=\"100\" src=\"/Thumbs/Avatar.ashx?assetId={$finfo['id']}&isSmall=1\" frameborder=\"0\" scrolling=\"no\"></img>
                                                                    </a>
                                                                </div>                          <div class=\"Summary\">
                                                                                                                <span class=\"OnlineStatus\">
              ";                          
              $onlinetest = ($finfo['lastseen'] + 300 <= time()) ? "<img src=\"/images/OnlineStatusIndicator_IsOffline.gif\" style=\"border-width:0px;\">" : "<img src=\"/images/OnlineStatusIndicator_IsOnline.gif\" style=\"border-width:0px;\">";
              echo"$onlinetest</span>
                                                                                                                <span class=\"Name\"><a href=\"/User.aspx?ID=$friendid\">{$finfo['username']}</a></span>
                                                                </div><div class=\"Options\">
                            <form method=\"post\">
                                                                <input name=\"FriendID\" type=\"hidden\" value=\"{$finfo['id']}\">
                                <input class=\"Button\" name=\"Delete\" type=\"submit\" value=\"Delete\" >
                            </form>
                        </div>
                                                            </div></td>";
                $total++;
                $row++;

                if ($row >= 3) {
                  $row = 0;
                }
              }}
            }
            ?>

                                                                  
                                                                  </tr>
      <tr>
<?php
     $resultsperpage = 5;
                    $check = mysqli_query($conn, "SELECT * FROM users");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    if(!isset($_GET['page'])) {
                        $page = 4;
                    }else{
                        $page = (int)$_GET['page'];
                    }

                    $thispagefirstresult = ($page-1)*$resultsperpage;

$friendq = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$userid' AND `arefriends`='1') OR  (`user_to` = '$userid' AND `arefriends`='1') LIMIT ".$thispagefirstresult.",".$resultsperpage) or die(mysqli_error($conn));

$friendnew = mysqli_query($conn, "SELECT * FROM friends WHERE (`user_from` = '$userid' AND `arefriends`='1') OR  (`user_to` = '$userid' AND `arefriends`='1')") or die(mysqli_error($conn));

$friendcount = mysqli_num_rows($friendnew);

$arefriends = false;


            if ($friendcount < 1) {
            } else {
              echo "<div class=\"columns\">";
              $total = 0;
              $row = 0;
              
              while ($friend = mysqli_fetch_assoc($friendq)) {
                if ($total <= 5) {


                $friendid = 0;

                if ($friend['user_from'] == $userid) {
                  $friendid = $friend['user_to'];
                } else {
                  $friendid = $friend['user_from'];
                }

                $friend_online = mysqli_query($conn, "SELECT * FROM users WHERE id='$friendid'") or die(mysqli_error($conn));
                
                $finfo = mysqli_fetch_assoc($friend_online);

                $usr4 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='$friendid' LIMIT ".$thispagefirstresult.",".$resultsperpage));
                echo "<td><div class=\"Friend\">
                                                                <div class=\"Avatar\">
                                                                    <a title=\"{$finfo['username']}\" href=\"/User.aspx?ID=$friendid\" style=\"display:inline-block;max-height:100px;max-width:100px;cursor:pointer;\">
                        <img height=\"100\" width=\"100\" src=\"/Thumbs/Avatar.ashx?assetId={$finfo['id']}&isSmall=1\" frameborder=\"0\" scrolling=\"no\"></img>
                                                                    </a>
                                                                </div>                          <div class=\"Summary\">
                                                                                                                <span class=\"OnlineStatus\">
              ";                          
              $onlinetest = ($finfo['lastseen'] + 300 <= time()) ? "<img src=\"/images/OnlineStatusIndicator_IsOffline.gif\" style=\"border-width:0px;\">" : "<img src=\"/images/OnlineStatusIndicator_IsOnline.gif\" style=\"border-width:0px;\">";
              echo"$onlinetest</span>
                                                                                                                <span class=\"Name\"><a href=\"/User.aspx?ID=$friendid\">{$finfo['username']}</a></span>
                                                                </div><div class=\"Options\">
                            <form method=\"post\">
                                                                <input name=\"FriendID\" type=\"hidden\" value=\"{$finfo['id']}\">
                                <input class=\"Button\" name=\"Delete\" type=\"submit\" value=\"Delete\" >
                            </form>
                        </div>
                                                            </div></td>";
                $total++;
                $row++;

                if ($row >= 3) {
                  $row = 0;
                }
              }}
            }
            ?>

                                                                  
                                                                  </tr>
      </tbody>
    </table>
  </div>
</div>
<div style="clear:both"></div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


