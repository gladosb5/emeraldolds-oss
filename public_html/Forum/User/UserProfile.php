<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";
if(isset($_GET['UserName'])){ 
$username = mysqli_real_escape_string($conn,$_GET['UserName']);
}else{ 
header("Location: /Error.aspx"); 
}
$userq = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username';") or die(mysqli_error($conn));
if(mysqli_num_rows($userq) < 1){
    header("Location: /Error.aspx");
}

$user = mysqli_fetch_assoc($userq);

// Create a DateTime object from the original date
$dateTime = DateTime::createFromFormat('jS F Y', $user["JoinDate"]);

// Format the DateTime object with the desired format
$formattedDate = $dateTime->format('m-d-Y h:i A');

$forumpostsq = mysqli_query($conn,"SELECT * FROM forum");
$totalposts = mysqli_num_rows($forumpostsq);

$usertotalpostsq = mysqli_query($conn,"SELECT * FROM forum WHERE author = {$user['id']}") or die(mysqli_error($conn));
$usertotalposts = mysqli_num_rows($usertotalpostsq);

$userpercentposts = floor(($usertotalposts / $totalposts) * 100);

$usertotalpostsq2 = mysqli_query($conn,"SELECT * FROM forum WHERE author = {$user['id']} ORDER by id DESC LIMIT 10") or die(mysqli_error($conn));

?>
<link rel="stylesheet" href="/Forum/api/skins/default/style/default.css" type="text/css"/>
<title>
  emeraldnews: A FREE Virtual World-Building Game with Avatar Chat, 3D Environments, and Physics
</title>
<div id="Body">
          
      <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td>
            
          </td>
        </tr>
        <tr valign="bottom">
          <td>
            <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
              <tr valign="top">
                <!-- left column -->
                <td class="LeftColumn">&nbsp;&nbsp;&nbsp;</td>
                <td id="ctl00_cphRoblox_LeftColumn" nowrap="nowrap" width="180" class="LeftColumn">
                  <p></p>
                   
                    <br>
                    
                    <br>
                <td class="LeftColumn">&nbsp;&nbsp;&nbsp;</td>
                <!-- center column -->
                <td class="CenterColumn">&nbsp;&nbsp;&nbsp;</td>
                <td id="ctl00_cphRoblox_CenterColumn" width="95%" class="CenterColumn">
                  <span id="ctl00_cphRoblox_NavigationMenu2">
<table width="100%" cellspacing="1" cellpadding="0">
  <tr>
    <td align="right" valign="middle">
      <a id="ctl00_cphRoblox_NavigationMenu2_ctl00_HomeMenu" class="menuTextLink" href="/Forum/Default.aspx"><img src="/Forum/api/skins/default/images/icon_mini_home.gif" border="0">Home &nbsp;</a>
      <a id="ctl00_cphRoblox_NavigationMenu2_ctl00_SearchMenu" class="menuTextLink" href="/Forum/Search/Default.aspx"><img src="/Forum/api/skins/default/images/icon_mini_search.gif" border="0">Search &nbsp;</a>
      
      
     <?php if($logged == "no"){ ?> <a id="ctl00_cphRoblox_NavigationMenu2_ctl00_RegisterMenu" class="menuTextLink" href="/Forum/User/CreateUser.aspx"><img src="/Forum/api/skins/default/images/icon_mini_register.gif" border="0">Register &nbsp;</a><?php }else{ ?><a class="menuTextLink" href="/Forum/User/UserProfile.aspx?UserName=<?=$_USER['username']?>"><img src="/Forum/api/skins/default/images/icon_mini_profile.gif" border="0">Profile &nbsp;</a><?php } ?>
      
      
      
      
    </td>
  </tr>
</table>
</span>
<table cellspacing="1" cellpadding="0" width="100%" class="tableBorder">
                  <tbody><tr>
                    <th height="25" class="tableHeaderText" align="left" colspan="2">
                      &nbsp; Viewing User Profile for:
                      <span><?=$user['username']?></span>
                    </th>
                  </tr>
                  <tr>
                    <td height="20" class="forumHeaderBackgroundAlternate">
                      <span class="forumTitle">
                      &nbsp;About
                      </span>
                    </td>
                   
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="forumRow" width="50%">
                      <table cellpadding="4">
                        <tbody><tr>
                          <td valign="top" align="right">
                            <span class="normalTextSmallBold">
                            Joined:
                            </span>
                          </td>
                          <td valign="top" align="left">
                            <span class="normalTextSmall">
                            <span><?=$formattedDate?></span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" align="right">
                            <span class="normalTextSmallBold">
                            Last Login:
                            </span>
                          </td>
                          <td valign="top" align="left">
                            <span class="normalTextSmall">
                            <span><?=$formattedDate?></span>
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" align="right">
                            <span class="normalTextSmallBold">
                            Website:
                            </span>
                          </td>
                          <td valign="top" align="left">
                            <span class="normalTextSmall">
                            <a target="_blank" href="/User.aspx?ID=<?=$user['id']?>">http://www.emeraldolds.glados.pro/User.aspx?ID=<?=$user['id']?></a>
                            </span>
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                  <tr>
                    <td height="20" class="forumHeaderBackgroundAlternate" colspan="2">
                      <span class="forumTitle">
                      &nbsp;Post Statistics
                      </span>
                    </td>
                  </tr>
                <tr>
                  <td class="forumRow" valign="top" colspan="2">
                    <table width="100%" cellpadding="4">
                      <tbody><tr>
                        <td valign="top" align="left">
                          <span class="normalTextSmallBold">
                          <span><?=$user['username']?> has contributed to <?=$usertotalposts?> out of <?=$totalposts?> total posts (<?=$userpercentposts?>% of total).</span>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td valign="top" align="left">
                          <span class="normalTextSmallBold">
                          Most Recent Posts:
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td valign="top" align="left" colspan="2">
                          <table cellspacing="1" cellpadding="3" border="0" width="100%">
                                                        <tbody>
                                                            
                                                        <?php
                                                        if(mysqli_num_rows($usertotalpostsq2) > 0){
                                                        while($row = mysqli_fetch_assoc($usertotalpostsq2)){ 
                                                        
                                                        $totalrepliesq = mysqli_query($conn,"SELECT * FROM forum WHERE reply_to = '{$row['id']}'");
                                                        $totalreplies = mysqli_num_rows($totalrepliesq);
                                                        $timestamp = $row['time_posted'];
                                                        $formattedDate2 = date('n/j/Y g:i:s A', $timestamp);
                                                        
                                                        if($row['reply_to'] != 0){
                                                            $postid = $row['reply_to'];
                                                        }else{
                                                            $postid = $row['id'];
                                                        }
                                                        
                                                        ?><tr>
                              <td>
                                <table width="100%" cellpadding="0" cellspacing="0">
                                  <tbody><tr>
                                    <td class="forumAlternate">
                                      <a class="linkSmallBold" href="/Forum/ShowPost.aspx?ID=<?=$postid?>"><?=$row['title']?></a>
                                      <span class="normalTextSmall"><i><?=$formattedDate2?></i></span>
                                      <span class="normalTextSmall">(Total replies: <?=$totalreplies?>)</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="forumAlternate"><span class="normalTextSmall"><?=nl2br($row['content'])?></span></td>
                                  </tr>
                                </tbody></table>
                              </td>
                            </tr>
                                                        <tr>
                              <td>
                              </td>
                            </tr><?php }} ?>
                                                      </tbody></table>
                          <p>
                          </p>
                        </td>
                      </tr>
                    </tbody></table>
                  </td>
                </tr>
              </tbody></table>
          </td>
        </tr>
      </table>

        </div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>



