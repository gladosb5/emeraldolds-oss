<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if(isset($_GET['ForumGroupID'])){ 
$forumgroupid = (int)$_GET['ForumGroupID']; 
}else{ 
header("Location: /Error.aspx");
}
$groupq = mysqli_query($conn,"SELECT * FROM forum_groups WHERE sort_order = $forumgroupid");
if(mysqli_num_rows($groupq) < 1){
    header("Location: /Error.aspx");
}
$group = mysqli_fetch_assoc($groupq);

?>
<link rel="stylesheet" href="/Forum/api/skins/default/style/default.css" type="text/css"/>
<title>
  <?=$title?>
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
                  <p>
                    <span id="ctl00_cphRoblox_SearchRedirect">




</span>
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
      
      
    </td>
  </tr>
</table>
</span>
                  <br>
                  
<span id="ctl00_cphRoblox_Whereami1">
<table cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr>
        <td valign="top" align="left" width="1px">
            <nobr>
                
            </nobr>
        </td>
        <td id="ctl00_cphRoblox_Whereami1_ctl00_ForumGroupMenu" class="popupMenuSink" valign="top" align="left" width="1px">
            <nobr>
                
                <a id="ctl00_cphRoblox_Whereami1_ctl00_LinkForumGroup" class="linkMenuSink" href="/Forum/ShowForumGroup.aspx?ForumGroupID=<?=$forumgroupid?>"><?=$group['name']?></a>
            </nobr>
        </td>

        <td id="ctl00_cphRoblox_Whereami1_ctl00_ForumMenu" class="popupMenuSink" valign="top" align="left" width="1px">
            <nobr>
                
                
            </nobr>
        </td>

        <td id="ctl00_cphRoblox_Whereami1_ctl00_PostMenu" class="popupMenuSink" valign="top" align="left" width="1px">
            <nobr>
                
                
            </nobr>
        </td>

        <td valign="top" align="left" width="*">&nbsp;</td>
    </tr>
</tbody></table>

<span id="ctl00_cphRoblox_Whereami1_ctl00_MenuScript"></span></span><br>
                  <table cellpadding="2" cellspacing="1" border="0" width="100%" class="tableBorder"><tr>
  <th class="tableHeaderText" colspan="2" height="20">Forum</th><th class="tableHeaderText" width="50" nowrap="nowrap">&nbsp;&nbsp;Threads&nbsp;&nbsp;</th><th class="tableHeaderText" width="50" nowrap="nowrap">&nbsp;&nbsp;Posts&nbsp;&nbsp;</th><th class="tableHeaderText" width="135" nowrap="nowrap">&nbsp;Last Post&nbsp;</th>
</tr>
<?php

$groupq = mysqli_query($conn,"SELECT * FROM forum_groups WHERE sort_order = $forumgroupid");

while($row2 = mysqli_fetch_assoc($groupq)){
    ?>
<tr id="ctl00_cphRoblox_ForumGroupRepeater1_ctl01_ForumGroup">
  <td class="forumHeaderBackgroundAlternate" colspan="5" height="20"><a id="ctl00_cphRoblox_ForumGroupRepeater1_ctl01_GroupTitle" class="forumTitle" href="/Forum/ShowForumGroup.aspx?ForumGroupID=<?=$row2['sort_order']?>"><?=$row2['name']?></a></td>
</tr>
<?php
$topicq = mysqli_query($conn,"SELECT * FROM forum_topics WHERE parent = {$row2['sort_order']}");

while($row = mysqli_fetch_assoc($topicq)){
    $topicid = $row['id'];

$threads1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM forum WHERE category='$topicid' AND reply_to='0'"));
$replies1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM forum WHERE category='$topicid'"));

$lp1qa = mysqli_query($conn, "SELECT * FROM forum WHERE category='$topicid' ORDER BY id DESC LIMIT 1");

if(mysqli_num_rows($lp1qa) > 0){
// Convert the timestamp to DateTime object
$lp1q = mysqli_fetch_assoc($lp1qa);
$lp1a = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='{$lp1q['author']}'"));
$lrtimeago = new DateTime("@{$lp1q['time_posted']}");
$currentDateTime = new DateTime("now");

// Check if the post was made today
if ($lrtimeago->format('Y-m-d') == $currentDateTime->format('Y-m-d')) {
    // If yes, display the time only
    $lp1t = $lrtimeago->format('Today @ G:i A');
} else {
    // If not, display the full date and time
    $lp1t = $lrtimeago->format('d/m/Y @ G:i A');
}
if($lp1q['reply_to'] != 0){
  $postid = $lp1q['reply_to'];
}else{
  $postid = $lp1q['id'];
}
$lp1 = "<center>$lp1t<br>by <a href=\"/User.aspx?ID={$lp1q['author']}\">{$lp1a['username']}</a><a href=\"/Forum/ShowPost.aspx?ID=$postid\"><img border=\"0\" src=\"/Forum/api/skins/default/images/icon_mini_topic.gif\"></a></center>";
}else{
$lp1 = "<center>Never</center>";  
}

?>
<tr>
    <td class="forumRow" align="center" valign="top" width="34" nowrap="nowrap">
      <img src="/Forum/api/skins/default/images/forum_status.gif" width="34" border="0"/>
    </td>
    <td class="forumRow" width="80%">
        <a class="forumTitle" href="/Forum/ShowForum.aspx?ID=<?=$topicid?>"><?=$row['name']?></a>
        <span class="normalTextSmall"><br><?=$row['description']?></span>
    </td>
    <td class="forumRowHighlight" align="center">
        <span class="normalTextSmaller"><?php echo $threads1 ?></span>
    </td>
    <td class="forumRowHighlight" align="center">
        <span class="normalTextSmaller"><?php echo $replies1 ?></span>
    </td>
    <td class="forumRowHighlight" align="center">
        <span class="normalTextSmaller"><span><b><?php echo $lp1 ?></span>
    </td>
</tr>
<?php }} ?>
<tr>
</tr>
</table>
                  <p></p>
                  <table cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr>
        <td valign="top" align="left" width="1px">
            <nobr>
                <a id="ctl00_cphRoblox_Whereami2_ctl00_LinkHome" class="linkMenuSink" href="/Forum/Default.aspx">emeraldnews Forum</a>
            </nobr>
        </td>
        <td id="ctl00_cphRoblox_Whereami2_ctl00_ForumGroupMenu" class="popupMenuSink" valign="top" align="left" width="1px">
            <nobr>
                <span id="ctl00_cphRoblox_Whereami2_ctl00_ForumGroupSeparator" class="normalTextSmallBold">&nbsp;&gt;</span>
                <a id="ctl00_cphRoblox_Whereami2_ctl00_LinkForumGroup" class="linkMenuSink" href="/Forum/ShowForumGroup.aspx?ForumGroupID=<?=$forumgroupid?>"><?=$group['name']?></a>
            </nobr>
        </td>

        <td id="ctl00_cphRoblox_Whereami2_ctl00_ForumMenu" class="popupMenuSink" valign="top" align="left" width="1px">
            <nobr>
                
                
            </nobr>
        </td>

        <td id="ctl00_cphRoblox_Whereami2_ctl00_PostMenu" class="popupMenuSink" valign="top" align="left" width="1px">
            <nobr>
                
                
            </nobr>
        </td>

        <td valign="top" align="left" width="*">&nbsp;</td>
    </tr>
</tbody></table>
<br>
                </td>

                <td class="CenterColumn">&nbsp;&nbsp;&nbsp;</td>
                <!-- right margin -->
                <td class="RightColumn">&nbsp;&nbsp;&nbsp;</td>
                
              </tr>
            </table>
          </td>
        </tr>
      </table>

        </div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
<title>emeraldnews - forum</title>


