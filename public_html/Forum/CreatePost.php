<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no")
{
  header("Location: /Login/Default.aspx");
}
$is_limited_account = true;

  if ($_USER['time_joined'] + 86400 <= time()) {
    $is_limited_account = false;
  }

if(isset($_GET['t'])){
$topic = (int)$_GET['t']; 
}else{
header("Location: /Error.aspx");
}

$cisadjkuias = mysqli_query($conn,"SELECT * FROM forum_topics WHERE id = $topic");
if(mysqli_num_rows($cisadjkuias) < 1){
    header("Location: /Error.aspx");
}
//if topic is 2 then die else show message page thingmajig
$cisadjkuiasisveryyummy = mysqli_query($conn,"SELECT * FROM forum_topics WHERE id = $topic");
if($topic == 2 ){
  echo '<img src="https://www.bing.com/th/id/OGC.2565c78f86efd56c1b8d2d32a452902d?pid=1.7&rurl=https%3a%2f%2fmedia.tenor.com%2fimages%2f2565c78f86efd56c1b8d2d32a452902d%2ftenor.gif&ehk=t0Nb9DLLfjZpcV4KtPM2jJkqBLtqCUVXIuUxzft%2by%2bY%3d"></img>';
  echo 'nu-uh111!!!!1!!1';
  die();
}
  

$topic = intval($topic);

if ($is_limited_account) {
  die("<center>you need to wait for 1 day cuz like we dont want spammers!111!1</center>");
}

?>
<title>emeraldnews - forum</title>
<script>
    function PostForum(token) {
  document.getElementById("forumform").submit();
}
</script>
<div id="body">
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
                                                    <br>
                                                    <span></span>
                                                    <span>
                                                        <table cellpadding="0" width="100%">
                                                            <tbody>
                                                                <tr></tr>
                                                                <tr><td>&nbsp;</td></tr>
                                                                <tr>
                                                                    <td valign="top" colspan="2">
                                                                        <table class="tableBorder" cellspacing="1" cellpadding="3" width="100%" align="left">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <?php
                                                                                    
            function FilterString($string) {
              $words = array_values(array_filter(file($_SERVER["DOCUMENT_ROOT"] . "/api/profanity_filter_v1", FILE_IGNORE_NEW_LINES)));
              foreach ($words as $word) {
              if (preg_match("/(".$word.")/i", $string)) {
                return $word;
                }
              }
              return "OK";
            }                          
                                          
  
if(isset($_POST['hello'])){  

$ratelimitq = mysqli_query($conn,"SELECT * FROM forum WHERE author = '{$_USER['id']}' ORDER by id DESC LIMIT 1");

if(mysqli_num_rows($ratelimitq) == 1){
  $ratelimit = mysqli_fetch_assoc($ratelimitq);
  if(time() < $ratelimit['time_posted'] + 15){
    $ratelimited = true;
  }else{
    $ratelimited = false;
  }
}else{
  $ratelimited = false;
}

if($ratelimited == false){
        if (isset($_POST['title']) && isset($_POST['content'])) {
      $title = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['title']));
          $content = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['content']));
      if (strlen($title) > 0 && strlen($content) > 0) {
        
        $strlencheck1 = str_replace(" ", "", $title);
        $strlencheck2 = str_replace(" ", "", $content);
        
        if (strlen($strlencheck1) > 0 && strlen($strlencheck2) > 0) {
          $captcha_completed=true;
          if (!$captcha_completed) {
            echo "reCAPTCHA failed, please try again.";
          } else {
                //Post it

                $tim = time();
                $stmt = "INSERT INTO `forum`
                (`id`, `author`, `reply_to`, `title`, `content`, `time_posted`, `category`) VALUES
                (NULL, {$_USER['id']}, '0', '$title', '$content', '$tim', '$topic')";

                mysqli_query($conn, $stmt) or die(mysqli_error($conn));
                $insid = mysqli_insert_id($conn);
                header("Location: /Forum/ShowPost.aspx?ID=$insid");
          }
      }else{
      echo "Missing information.";
    }
      }else{
      echo "Missing information.";
    }
        }else{
      echo "Missing information.";
    }
    }else{
      echo "You are being rate limited.";
    }
}
        ?>
        <title>
  <?=$title?>
</title>
        <form id="forumform" method="post">
                                                            <th class="tableHeaderText" align="left" height="25">&nbsp;Post a New Message</th>
                                                          </tr>
                                                          <tr>
                                                              <td class="forumRow">
                                                                  <table cellspacing="1" cellpadding="3">
                                                                      <tbody>
                                                                          <tr>
                                    <td valign="top" nowrap="" align="right"><span class="normalTextSmallBold">Author: </span></td>
                                    <td valign="top" align="left" colspan="2"><span class="normalTextSmall"><span id="PostAuthor"><?php echo $_USER['username'] ?></span>
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="center" nowrap="" align="right"><span class="normalTextSmallBold">Subject: </span></td>
                                    <td valign="top" align="left"><input name="title" type="text" id="PostSubject" cols="55" style="width: 340px;"></td>
                                  </tr>
                                  <tr>
                                    <td valign="top" nowrap="" align="right"><span class="normalTextSmallBold">Message: </span>
                                    </td>
                                    <td valign="top" align="left">
                                      <textarea name="content" id="PostBody" cols="72" rows="2" style="height: 200px;"></textarea>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="center" align="right" width="93"><span class="normalTextSmallBold">&nbsp;</span></td>
                                    <td valign="top" align="left"><span class="normalTextSmall"><input type="checkbox" name="AllowReplies" id="AllowReplies">
                                      <span> Do not allow replies to this post.</span>
                                      </span>
                                    </td>
                                  </tr><tr>
                                    <td valign="top" align="right" colspan="2">
                                      <input type="button" id="Cancel" value=" Cancel " onclick="location.href='/Forum/ShowForum.aspx?ID=<?=$topic?>'">
                                    </td>
                                  </tr><tr>
                                    <td valign="top" align="right" colspan="2">                                            <input onclick='PostForum(1)' id="finish" name="hello" type="submit" value=" Post ">
                                    
                                    </td>
                                  </tr>
                                                                                                        </tbody>
                                                                  </table>
                                                              </td>
                                                          </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </span>
                                                </td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                                <td>&nbsp;&nbsp;&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <style>
/*****************************************************
General Anchor
*****************************************************/
a.linkSmallBold, a.linkMenuSink
{
    font-weight: bold;
}

a.linkSmall, a.LinkSmallBold, a.linkMenuSink
{
    color: navy;
    font-size: 10px;
}


a.linkSmallBold:visited, a.linkMenuSink:visited
{
    color: #013DA4;
}

a.linkSmallBold:Hover, a.linkMenuSink:Hover
{
    color: #DD6900;
}


/*****************************************************
Text and Anchor to display when a user is online
*****************************************************/
.userOnlineLinkBold, a.userOnlineLinkBold, a.userOnlineLinkBold:Visited, a.userOnlineLinkBold:Hover, a.userOnlineLinkBold:Link
{
    font-weight: bold;
    color: #0055E7;
}

.moderatorOnlineLinkBold, a.moderatorOnlineLinkBold, a.moderatorOnlineLinkBold:Visited, a.moderatorOnlineLinkBold:Hover, a.moderatorOnlineLinkBold:Link
{
    font-weight: bold;
    color: darkblue;
}

.adminOnlineLinkBold, a.adminOnlineLinkBold, a.adminOnlineLinkBold:Visited, a.adminOnlineLinkBold:Hover, a.adminOnlineLinkBold:Link
{
    font-weight: bold;
    color: black;
}

/*****************************************************
Text and anchors used in the navigation menu
*****************************************************/
.menuTitle
{
    font-weight: bold;
    font-size: 20px;
    font: normal 8pt/normal Verdana, sans-serif;
    FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    color: navy;
}

.menuText
{
    font-size: 0.9em;
    font-weight: bold;
    font: normal 8pt/normal Verdana, sans-serif;
    color: #FFFFFF;
}

a.menuTextLink:visited, a.menuTextLink:link
{
    font-size: 0.9em;
    text-decoration: none;
    font: normal 8pt/normal Verdana, sans-serif;
    color: #013DA4;
}

a.menuTextLink:Hover
{
    color: #000000;
}


/*****************************************************
Text and anchors used in the search
*****************************************************/
.searchPager
{
    font-size : 0.9em;
    font-weight: bold;
}

.searchItem
{
    background-color: #DDEEFF;
}

.searchAlternatingItem
{
    background-color: #FFFFFF;
}


/*****************************************************
Default separator style for PostList
*****************************************************/
td.flatViewSpacing
{
    height: 2px;
    background-color: #80B7FF;
}

/*****************************************************
Table Header and cell definitions
*****************************************************/
th
{
    background-image: url(/Forum/api/skins/default/images/forumHeaderBackground.gif);
    background-color: #4455aa
}

td.forumHeaderBackgroundAlternate
{
    background-image: url(/Forum/api/skins/default/images/forumHeaderBackgroundAlternate.gif);
    background-color: #EBEDF6;
}

/*****************************************************
Body
*****************************************************/
body
{
    FONT-SIZE: 8pt;
    font: normal 8pt/normal Verdana, sans-serif;
    scrollbar-face-color: #DEE3E7;
    scrollbar-highlight-color: #FFFFFF;
    scrollbar-shadow-color: #DEE3E7;
    scrollbar-3dlight-color: #D1D7DC;
    scrollbar-arrow-color:  #006699;
    scrollbar-track-color: #EFEFEF;
    scrollbar-darkshadow-color: #98AAB1;
}


/*****************************************************
Validation Text
*****************************************************/
.validationWarningSmall
{
    color: Red;
    font-size : 0.9em;
}

/*****************************************************
General Text
*****************************************************/
.normalTextSmall
{
    font-size : 11px;
}

.normalTextSmallBold
{
    font-size : 11px;
    font-weight: bold;
}

.normalTextSmaller
{
    font-size: 10px;
}

.normalTextSmall, .normalTextSmallBold, .normalTextSmaller
{
    FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
}

/*****************************************************
Text used on tables with a background
*****************************************************/
.tableHeaderText
{
    color: white;
    font-size: 10px;
    font-weight:bold;
    font: normal 8pt/normal Verdana, sans-serif;
}

/*****************************************************
Border used around tables
*****************************************************/
.tableBorder
{
    border: 1px #013DA4 solid;
    background-color: #FFFFFF;
}

/*****************************************************
Main forum colors
*****************************************************/
td.forumRow
{
    background-color: #DDEEFF;
}


td.forumAlternate
{
    background-color: #DAE7FD;
}

/*****************************************************
Background color and text used in threaded view
*****************************************************/
td.threadTitle
{
    background-color: #D4D9EC;
}

.threadDetailTextSmall
{
    color: #0055E7;
    font-size: 0.9em;
}

.threadDetailTextSmallBold
{
    color: #0055E7;
    font-size: 0.9em;
    font-weight: bold;
    font: normal 8pt/normal Verdana, sans-serif;
}

td.forumRowHighlight
{
    background-color: #D4D9EC;
}

/*****************************************************
Text and links used in ForumGroupRepeater and ForumRepeater
*****************************************************/
.forumTitle
{
    font-size: 1.0px;
    font-weight: bold;
    font: normal 8pt/normal Verdana, sans-serif;
    color: #013DA4;
}


a.forumTitle:visited, a.forumTitle:link
{
    font-size: 1.0em;
    font-weight: bold;
    color: #013DA4;
}

a.forumTitle:hover
{
    color: #DD6900;
}

.forumName
{
    font-weight: bold;
    FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    font-size: 16px;
    text-decoration: none;
    color: navy;
}

a.forumName:hover
{
    color: #DD6900;
    text-decoration: underline;
}


/*****************************************************
Form Elements
*****************************************************/
select
{   FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    font-size: 0.9em;
    font-weight: bold;
    background-color: #DAE7FD;
    border-color: Black;
}

textarea
{
    font-size: 0.9em;
    FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    background-color: White;
    border-color: Black;
}

/*****************************************************
Menu Controls
*****************************************************/
A.linkMenuSink
{
    font-size: 0.9em;
    FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    position: relative;
}

TD.popupMenuSink
{
    position: relative;
}

DIV.popupMenu
{
    border: 1px solid blue;
}

DIV.popupTitle
{
  FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    color: white;
    font-weight: bold;
    background-color: #4455AA;
}

DIV.popupItem
{
    font-size: 1.0em;
    font-weight: bold;
  FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
    background-color: #DDEEFF;
}
</style>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
<title>emeraldnews - forum</title>


