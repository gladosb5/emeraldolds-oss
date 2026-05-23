<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

$datexd = date('d-m-y');
$nowwwwa = new DateTime("@" . time());
$nowa = $nowwwwa->format('M d G:i');
$nowwww = new DateTime("@" . time());
$now = $nowwww->format('M d G:i');

?>
<title>emeraldnews - forums</title>
<link rel="stylesheet" href="/Forum/api/skins/default/style/default.css" type="text/css"/>

<div id="Body">
    <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td>
                <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                    <tr valign="top">
                        <!-- left column -->
                        <td class="LeftColumn" width="10">&nbsp;</td>
                        <td id="ctl00_cphRoblox_LeftColumn" width="180" class="LeftColumn">
                            <span id="ctl00_cphRoblox_SearchRedirect">
                                <title>emeraldnews - forum</title>
                            </span>
                        </td>
                        <td class="LeftColumn" width="10">&nbsp;</td>
                        
                        <!-- center column -->
                        <td class="CenterColumn" width="10">&nbsp;</td>
                        <td id="ctl00_cphRoblox_CenterColumn" width="95%" class="CenterColumn">
                            <span id="ctl00_cphRoblox_NavigationMenu2">
                                <table width="100%" cellspacing="1" cellpadding="0">
                                    <tr>
                                        <td align="right" valign="middle"></td>
                                    </tr>
                                </table>
                            </span>
                            
                            <table cellpadding="0" cellspacing="2" width="100%">
                                <tr>
                                    <td align="right"></td>
                                </tr>
                            </table>
                            
                            <table cellpadding="4" cellspacing="1" border="0" width="100%" class="tableBorder">
                                <tr>
                                    <th class="tableHeaderText" colspan="2" height="25">Forum</th>
                                    <th class="tableHeaderText" width="80" nowrap="nowrap">Threads</th>
                                    <th class="tableHeaderText" width="80" nowrap="nowrap">Posts</th>
                                    <th class="tableHeaderText" width="150" nowrap="nowrap">Last Post</th>
                                </tr>
                                
                                <?php
                                $groupq = mysqli_query($conn,"SELECT * FROM forum_groups");
                                
                                while($row2 = mysqli_fetch_assoc($groupq)){
                                ?>
                                <tr id="ctl00_cphRoblox_ForumGroupRepeater1_ctl01_ForumGroup">
                                    <td class="forumHeaderBackgroundAlternate" colspan="5" height="25">
                                        <a id="ctl00_cphRoblox_ForumGroupRepeater1_ctl01_GroupTitle" class="forumTitle" href="/Forum/ShowForumGroup.aspx?ForumGroupID=<?=$row2['sort_order']?>">
                                            <?=$row2['name']?>
                                        </a>
                                    </td>
                                </tr>
                                
                                <?php
                                $topicq = mysqli_query($conn,"SELECT * FROM forum_topics WHERE parent = {$row2['sort_order']}");
                                
                                while($row = mysqli_fetch_assoc($topicq)){
                                    $topicid = $row['id'];
                                    
                                    $threads1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM forum WHERE category='$topicid' AND reply_to='0'"));
                                    $replies1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM forum WHERE category='$topicid'"));
                                    
                                    $lp1qa = mysqli_query($conn, "SELECT * FROM forum WHERE category='$topicid' ORDER BY id DESC LIMIT 1");
                                    
                                    if(mysqli_num_rows($lp1qa) > 0){
                                        $lp1q = mysqli_fetch_assoc($lp1qa);
                                        $lp1a = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='{$lp1q['author']}'"));
                                        $lrtimeago = new DateTime("@{$lp1q['time_posted']}");
                                        $currentDateTime = new DateTime("now");
                                        
                                        if ($lrtimeago->format('Y-m-d') == $currentDateTime->format('Y-m-d')) {
                                            $lp1t = $lrtimeago->format('Today @ G:i A');
                                        } else {
                                            $lp1t = $lrtimeago->format('d/m/Y @ G:i A');
                                        }
                                        
                                        if($lp1q['reply_to'] != 0){
                                            $postid = $lp1q['reply_to'];
                                        }else{
                                            $postid = $lp1q['id'];
                                        }
                                        
                                        $lp1 = "<div style='text-align: center; line-height: 1.4;'>" . 
                                               "<div style='margin-bottom: 2px;'>{$lp1t}</div>" . 
                                               "<div>by <a href=\"/Forum/User/UserProfile.aspx?UserName={$lp1a['username']}\">{$lp1a['username']}</a> " . 
                                               "<a href=\"/Forum/ShowPost.aspx?ID=$postid\"><img border=\"0\" src=\"/Forum/api/skins/default/images/icon_mini_topic.gif\" style=\"vertical-align: middle; margin-left: 3px;\"></a></div>" .
                                               "</div>";
                                    }else{
                                        $lp1 = "<div style='text-align: center;'>Never</div>";  
                                    }
                                ?>
                                
                                <tr>
                                    <td class="forumRow" align="center" valign="middle" width="40" style="padding: 8px;">
                                        <img src="/Forum/api/skins/default/images/forum_status.gif" width="34" border="0"/>
                                    </td>
                                    <td class="forumRow" width="60%" style="padding: 8px;">
                                        <div style="margin-bottom: 4px;">
                                            <a class="forumTitle" href="/Forum/ShowForum.aspx?ID=<?=$topicid?>"><?=$row['name']?></a>
                                        </div>
                                        <div class="normalTextSmall"><?=$row['description']?></div>
                                    </td>
                                    <td class="forumRowHighlight" align="center" style="padding: 8px;">
                                        <span class="normalTextSmaller"><?php echo $threads1 ?></span>
                                    </td>
                                    <td class="forumRowHighlight" align="center" style="padding: 8px;">
                                        <span class="normalTextSmaller"><?php echo $replies1 ?></span>
                                    </td>
                                    <td class="forumRowHighlight" align="center" style="padding: 8px;">
                                        <span class="normalTextSmaller"><?php echo $lp1 ?></span>
                                    </td>
                                </tr>
                                
                                <?php 
                                } 
                                } 
                                ?>
                            </table>
                            
                            <p></p>
                        </td>
                        
                        <td class="CenterColumn" width="10">&nbsp;</td>
                        <!-- right margin -->
                        <td class="RightColumn" width="10">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
