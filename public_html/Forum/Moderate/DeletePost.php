<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";
if($logged == "no"){
    header("Location: /Login/Default.aspx");
  } 

if(isset($_GET['PostID'])){ 
$id = (int)$_GET['PostID']; 
}else{ 
header("Location: /Error.aspx");
}
                    $resultsperpage = 10;
                    $check = mysqli_query($conn, "SELECT * FROM users");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    if(!isset($_GET['page'])) {
                        $page = (int)(int)1;
                    }else{
                        $page = (int)$_GET['page'];
                    }

                    $thispagefirstresult = ($page-1)*$resultsperpage;
                    
$fr = mysqli_query($conn, "SELECT * FROM forum WHERE reply_to='$id' LIMIT ".$thispagefirstresult.",".$resultsperpage) or die(mysqli_error($conn));

$fq = mysqli_query($conn, "SELECT * FROM forum WHERE id='$id'") or die(mysqli_error($conn));

if (mysqli_num_rows($fq) < 1) {
  header("Location: /Error.aspx");
}

$fpost = mysqli_fetch_assoc($fq);

$cisadjkuias = mysqli_query($conn,"SELECT * FROM forum_topics WHERE id = {$fpost['category']}");
if(mysqli_num_rows($cisadjkuias) < 1){
    header("Location: /Error.aspx");
}

$topicshit = mysqli_fetch_assoc($cisadjkuias);

$groupq = mysqli_query($conn,"SELECT * FROM forum_groups WHERE sort_order = {$topicshit['parent']}");
$group = mysqli_fetch_assoc($groupq);

if (isset($_POST['Cancel'])) {

    if ($fpost['reply_to'] != 0) {
        $letsgetthis = $conn->query("SELECT * FROM forum WHERE id = '" . $fpost['reply_to'] . "'");
        $letsgo = $letsgetthis->fetch_assoc();
        $whereamiid = $fpost['reply_to'] . "#" . $fpost['id'];
        $goto = "/Forum/ShowPost.aspx?ID=" . $whereamiid;
    } else {
        $whereamiid = $fpost['id'];
        $goto = "/Forum/ShowPost.aspx?ID=" . $whereamiid;
    }

    header("Location: " . $goto);
}

if (isset($_POST['Delete'])) {
    if ($_POST['DeleteReason'] != "") {
        if ($_USER['administrator'] == 'yes') {
            $delete = $conn->query("DELETE FROM forum WHERE id='$id'");
            if ($fpost['reply_to'] != 0) {
                $letsgetthis = $conn->query("SELECT * FROM forum WHERE id  = '" . $fpost['reply_to'] . "'");
                $letsgo = $letsgetthis->fetch_assoc();
                $whereamiid = $letsgo['id'];
                $goto = "/Forum/ShowPost.aspx?ID=" . $whereamiid;
            } else {
                $whereamiid = $fpost['id'];
                $forumgroup = $fpost['category'];
                $goto = "/Forum/ShowForum.aspx?ID=" . $forumgroup;
            }

            header("Location: " . $goto);
        }
    }
}
?>
<link rel="stylesheet" href="/Forum/api/skins/default/style/default.css" type="text/css">
<div id="Body">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr><td></td></tr>
                        <tr valign="bottom">
                            <td>
                                <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr valign="top">
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td width="95%" class="CenterColumn">








<tr>
    <td colspan="2" align="left"><span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1" name="Whereami1">
<table cellpadding="0" cellspacing="0" width="100%">
    <tbody><tr>
                                  <td width="1px" valign="top" align="left">
                                    <nobr>
                                    </nobr>
                                  </td>
                                  <td class="popupMenuSink" width="1px" valign="top" align="left">
                                  </td>
                                  <td class="popupMenuSink" width="1px" valign="top" align="left">
                                    <nobr>
                                      <span class="normalTextSmallBold">&shy;</span>
                                      <a class="linkMenuSink" href="/Forum/ShowForumGroup.aspx?ForumGroupID=<?=$group['sort_order']?>"><?=$group['name']?></a>
                                    </nobr>
                                  </td>
                                  <td class="popupMenuSink" width="1px" valign="top" align="left">
                                    <nobr>
                                      <span class="normalTextSmallBold">&nbsp;&gt;</span>
                                      <a class="linkMenuSink" href="/Forum/ShowForum.aspx?ID=<?=$topicshit['id']?>"><?=$topicshit['name']?></a>
                                    </nobr>
                                  </td>
                                  <td class="popupMenuSink" width="1px" valign="top" align="left">
                                    <nobr>
                                      <span class="normalTextSmallBold">&nbsp;&gt;</span>
<?php
?>
                                      <a class="linkMenuSink" href="/Forum/ShowPost.aspx?PostID=<?php echo $fpost['id'] ?>"><?php echo htmlspecialchars($fpost['title']) ?></a>
                                    </nobr>
                                  </td>
                                  <td width="*" valign="top" align="left">&nbsp;</td>
                                </tr>
</tbody></table>

<span id="ctl00_cphRoblox_ThreadView1_ctl00_Whereami1_ctl00_MenuScript"></span></span></td>
  </tr>

</td></tr></tbody></table>

<form action="" method="POST">
<p>
<center>
<table Class="tableBorder" CellPadding="3" Cellspacing="1">
  <tr>
    <th class="tableHeaderText" align="left" height="25">
      &nbsp;Delete Post/Thread
    </th>
  </tr>
  <tr>
    <td class="forumRow">
      <table cellSpacing="1" cellPadding="3">
        <tr>
          <td vAlign="top" nowrap align="left"><span class="normalTextSmall">yes or no</span></td>
        </tr>
        <tr>
          <td align="left" colspan="2">
            <table>
              <tr>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td vAlign="top" colspan="2" nowrap align="left"><span class="normalTextSmallBold"><asp:CheckBox Checked="true" id="SendUserEmail" runat="server" text=" Send user email (thread owner only) why post was deleted"/></span></td>
        </tr>
        <tr>
          <td align="left">
            <table>
              <tr>
                <td vAlign="top" align="left"><textarea id="DeleteReason" name="DeleteReason" rows="8" cols="90">hi</textarea>
<br><text class="validationWarningSmall"><?php if($_POST['Delete']){ if($_POST['DeleteReason'] == "nobody can guess this bro lalalala"){?>You must supply a reason.<?php }} ?>&nbsp;</text>
</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
                                    <td valign="top" align="right" colspan="2">
                                      <input type="submit" name="Cancel" id="Cancel" value=" Cancel "> &nbsp; <input type="submit" name="Delete" value=" Delete ">
                                    </td>
                                  </tr>
      </table>
    </td>
  </tr>
</table>
</center>
</form>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


