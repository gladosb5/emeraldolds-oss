<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";
if(isset($_GET['ID'])){
$id = (int)$_GET['ID'];
}else{
header("Location: /Error.aspx");
}
$userIdToDisplay = $_USER['id'];
$id = intval($id);
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

if ($fpost['reply_to'] != 0) {
  header("Location: /Error.aspx");
}

                    $resultsperpage = 10;
                    $check = mysqli_query($conn, "SELECT * FROM forum WHERE reply_to='$id'");
                    $usercount = mysqli_num_rows($check);

                    $numberofpages = ceil($usercount/$resultsperpage);

                    if(!isset($_GET['page'])) {
                        $page = (int)1;
                    }else{
                        $page = (int)$_GET['page'];
                    }

                    $thispagefirstresult = ($page-1)*$resultsperpage;
                    

$fauthor = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='{$fpost['author']}'"));

$ftimeago = ("@{$fpost['time_posted']}");

$fauthorpostcount = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM forum WHERE author='{$fauthor['id']}'"));

$fmembership = "";


$fpostedatsss = new DateTime("@{$fpost['time_posted']}");
$fpostedat =  $fpostedatsss->format('d M Y h:i A');


$fisonline = "Offline";

if ($fauthor['lastseen'] + 300 > time()) {
  $fisonline = "Online";
}

if($logged == "yes"){
    $profileviewq = mysqli_query($conn,"SELECT * FROM forum_views WHERE user_id = {$_USER['id']} AND post_id = {$fpost['id']}");
                    
    if(mysqli_num_rows($profileviewq) == 0){
        $profileviewq2 = mysqli_query($conn,"INSERT INTO forum_views (`user_id`,`post_id`) VALUES ({$_USER['id']},{$fpost['id']});");
        header("Location: /Forum/ShowPost.aspx?ID=".$fpost['id']);
    }
}
?>
<style>
  /* Reset and base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 11px;
    line-height: 1.4;
    background-color: green;
    color: #333;
}

/* Main container */
#Body {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

/* Navigation breadcrumbs */
.breadcrumb-container {
    margin-bottom: 20px;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.breadcrumb-container a {
    color: #013DA4;
    text-decoration: none;
    font-weight: bold;
}

.breadcrumb-container a:hover {
    color: #DD6900;
}

/* Forum table improvements */
.tableBorder {
    border: 1px solid #013DA4;
    background-color: #FFFFFF;
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.tableBorder td, .tableBorder th {
    padding: 12px;
    vertical-align: top;
    border-bottom: 1px solid #e0e0e0;
}

/* Header styling */
.forumHeaderBackgroundAlternate {
    background: linear-gradient(to bottom, #f0f0f0, #e0e0e0);
    padding: 15px;
    font-weight: bold;
    border-bottom: 2px solid #013DA4;
}

.tableHeaderText {
    color: white;
    font-size: 12px;
    font-weight: bold;
    background: linear-gradient(to bottom, #4455aa, #334499);
    padding: 15px;
}

/* Author column */
.author-column {
    width: 180px;
    background-color: #DDEEFF;
    padding: 15px;
    border-right: 1px solid #e0e0e0;
}

.author-info {
    text-align: center;
}

.author-info .username {
    font-weight: bold;
    font-size: 13px;
    margin-bottom: 8px;
    display: block;
    color: green;
}

.author-info .user-details {
    font-size: 10px;
    color: #666;
    margin: 5px 0;
}

.author-info .user-avatar {
    margin: 10px 0;
}

.author-info .user-badges {
    margin: 10px 0;
}

.author-info .user-badges img {
    margin: 2px;
}

/* Post content */
.post-content {
    background-color: #DDEEFF;
    padding: 15px;
}

.post-header {
    background-color: #D4D9EC;
    padding: 10px 15px;
    border-bottom: 1px solid #c0c0c0;
    margin-bottom: 15px;
}

.post-title {
    font-weight: bold;
    font-size: 13px;
    color: #333;
}

.post-date {
    font-size: 10px;
    color: #666;
    margin-top: 5px;
}

.post-body {
    font-size: 11px;
    line-height: 1.6;
    word-wrap: break-word;
    max-width: 100%;
    margin-bottom: 15px;
}

.post-actions {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #e0e0e0;
}

.post-actions a {
    margin-right: 15px;
    font-size: 11px;
    color: #013DA4;
    text-decoration: none;
}

.post-actions a:hover {
    color: #DD6900;
}

/* Moderation panel */
.moderation-panel {
    background-color: green;
    border: 1px solid #ffeaa7;
    padding: 10px;
    margin-top: 10px;
    text-align: center;
}

.moderation-panel a {
    color: #856404;
    text-decoration: none;
    margin: 0 5px;
}

.moderation-panel a:hover {
    color: #533f03;
}

/* Online status indicators */
.online-indicator {
    vertical-align: middle;
    margin-right: 5px;
}

/* Pagination */
.pagination-container {
    background-color: green;
    padding: 15px;
    border-top: 1px solid #e0e0e0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.pagination-container a {
    color: #013DA4;
    text-decoration: none;
    margin: 0 5px;
    padding: 5px 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
}

.pagination-container a:hover {
    background-color: #e9ecef;
    color: #DD6900;
}

/* Thread navigation */
.thread-navigation {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 15px;
    background-color: green;
    border-bottom: 1px solid #e0e0e0;
}

.thread-navigation a {
    color: #013DA4;
    text-decoration: none;
    font-weight: bold;
}

.thread-navigation a:hover {
    color: #DD6900;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    #Body {
        padding: 10px;
    }
    
    .author-column {
        width: 140px;
        padding: 10px;
    }
    
    .post-body {
        font-size: 12px;
    }
    
    .pagination-container {
        flex-direction: column;
        gap: 10px;
    }
}

/* Fix for form elements */
select, textarea, input {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 11px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Links */
a {
    color: #013DA4;
    text-decoration: none;
}

a:hover {
    color: #DD6900;
}

a:visited {
    color: #013DA4;
}

/* Text classes */
.normalTextSmall {
    font-size: 11px;
}

.normalTextSmallBold {
    font-size: 11px;
    font-weight: bold;
}

.normalTextSmaller {
    font-size: 10px;
}

/* Remove excessive spacing from tables */
table {
    border-spacing: 0;
}

td {
    padding: 8px;
}

/* Better spacing for nested tables */
.author-column table {
    width: 100%;
}

.author-column table td {
    padding: 3px;
    text-align: center;
}
</style>
<div id="Body">
    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-container">
        <a href="/Forum/ShowForumGroup.aspx?ForumGroupID=<?=$group['sort_order']?>"><?=$group['name']?></a>
        <span>&nbsp;&gt;&nbsp;</span>
        <a href="/Forum/ShowForum.aspx?ID=<?=$topicshit['id']?>"><?=$topicshit['name']?></a>
        <span>&nbsp;&gt;&nbsp;</span>
        <a href="/Forum/ShowPost.aspx?ID=<?php echo $fpost['id'] ?>"><?php echo htmlspecialchars($fpost['title']) ?></a>
    </div>

    <!-- Main Forum Table -->
    <table class="tableBorder">
        <!-- Thread Navigation -->
        <tr>
            <td class="forumHeaderBackgroundAlternate" colspan="2">
                <div class="thread-navigation">
                    <span></span>
                    <div>
                        <a href="/Forum/ShowPost.aspx?ID=<?=$id-1?>">Previous Thread</a>
                        <span> or </span>
                        <a href="/Forum/ShowPost.aspx?ID=<?=$id+1?>">Next Thread</a>
                    </div>
                </div>
            </td>
        </tr>

        <!-- Table Header -->
        <tr>
            <th class="tableHeaderText" style="width: 180px;">Author</th>
            <th class="tableHeaderText">Thread: <?php echo htmlspecialchars($fpost['title']) ?></th>
        </tr>

        <!-- Original Post -->
        <tr>
            <td class="author-column" style="background-color: #DDEEFF;">
                <div class="author-info">
                    <?php
                    $online = ($fauthor['lastseen'] + 300 <= time()) ? 
                        "<img src='/images/OnlineStatusIndicator_IsOffline.gif' class='online-indicator'>" : 
                        "<img src='/images/OnlineStatusIndicator_IsOnline.gif' class='online-indicator'>";
                    ?>
                    
                    <?php echo $online; ?>
                    <a class="username" href="/Forum/User/UserProfile.aspx?UserName=<?php echo $fauthor['username'] ?>">
                        <?php echo $fauthor['username'] ?>
                    </a>

                    <div class="user-avatar">
                        <a href="/Forum/User/UserProfile.aspx?UserName=<?php echo $fauthor['username'] ?>">
                            <!-- Add avatar image here if available -->
                        </a>
                    </div>

                    <div class="user-badges">
                        <?php if($fauthor['administrator'] == 'yes') { ?>
                            <img src="/Forum/api/skins/default/images/users_moderator.gif" alt="Forum Moderator">
                        <?php } ?>
                        
                        <?php if($fauthorpostcount >= 25) { ?>
                            <img src="/Forum/api/skins/default/images/top25.gif" alt="Top 25 Poster">
                        <?php } ?>
                    </div>

                    <div class="user-details">
                        <strong>Joined:</strong> <?=$fauthor['JoinDate'];?>
                    </div>
                    <div class="user-details">
                        <strong>Total Posts:</strong> <?php echo $fauthorpostcount ?>
                    </div>
                </div>
            </td>

            <td class="post-content">
                <div class="post-header">
                    <div class="post-title"><?php echo htmlspecialchars($fpost['title']) ?></div>
                    <div class="post-date">Posted: <?php echo $fpostedat ?></div>
                </div>

                <div class="post-body" style="color: black;">
                    <?php echo $ep->remove(nl2br($fpost['content'])) ?>
                </div>

                <div class="post-actions">
                    <?php if($fpost['is_locked'] != 1) { ?>
                        <a href="/Forum/Reply.aspx?ID=<?=$fpost['id']?>">
                            <img src="/images/newpost.gif" alt="Reply" style="vertical-align: middle;">
                        </a>
                    <?php } ?>
                    <a href="/report/?id=<?=$fpost['id']?>&type=0">Report Abuse</a>
                </div>

                <?php if($_USER["administrator"] == "yes") { ?>
                    <div class="moderation-panel">
                        <strong>Moderate:</strong>
                        <a href="/Forum/Moderate/DeletePost.aspx?PostID=<?=$fpost['id']?>">Delete Post</a> |
                        <a href="#" onclick="editPost(<?=$fpost['id']?>)">Edit Post</a> |
                        <a href="#" onclick="showModerationHistory(<?=$fpost['id']?>)">Moderation History</a> |
                        <a href="#" onclick="movePost(<?=$fpost['id']?>)">Move Post</a>
                    </div>
                <?php } ?>
            </td>
        </tr>

        <?php
        // Replies loop - improved structure
        while ($post = mysqli_fetch_assoc($fr)) {
            $author = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id='{$post['author']}'"));
            $authorpostcount = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM forum WHERE author='{$author['id']}'"));
            $postedatsss = new DateTime("@{$post['time_posted']}");
            $postedat = $postedatsss->format('d M Y h:i A');
            
            $onlinee = ($author['lastseen'] + 300 <= time()) ? 
                "<img src='/images/OnlineStatusIndicator_IsOffline.gif' class='online-indicator'>" : 
                "<img src='/images/OnlineStatusIndicator_IsOnline.gif' class='online-indicator'>";
        ?>

        <tr>
            <td class="author-column">
                <div class="author-info">
                    <?php echo $onlinee; ?>
                    <a class="username" href="/Forum/User/UserProfile.aspx?UserName=<?php echo $author['username'] ?>">
                        <?php echo $author['username'] ?>
                    </a>

                    <div class="user-avatar">
                        <a href="/Forum/User/UserProfile.aspx?UserName=<?php echo $author['username'] ?>">
                            <!-- Add avatar if available -->
                        </a>
                    </div>

                    <div class="user-badges">
                        <?php if($author['administrator'] == 'yes') { ?>
                            <img src="/Forum/api/skins/default/images/users_moderator.gif" alt="Forum Moderator">
                        <?php } ?>
                        
                        <?php if($authorpostcount >= 25) { ?>
                            <img src="/Forum/api/skins/default/images/top25.gif" alt="Top 25 Poster">
                        <?php } ?>
                    </div>

                    <div class="user-details">
                        <strong>Joined:</strong> <?=$author['JoinDate'];?>
                    </div>
                    <div class="user-details">
                        <strong>Total Posts:</strong> <?php echo $authorpostcount ?>
                    </div>
                </div>
            </td>

            <td class="post-content">
                <div class="post-header">
                    <div class="post-title"><?php echo htmlspecialchars($post['title']) ?></div>
                    <div class="post-date">Posted: <?php echo $postedat ?></div>
                </div>

                <div class="post-body" style="color: black;">
                    <?php echo $ep->remove(nl2br($post['content'])) ?>
                </div>

                <div class="post-actions">
                    <a href="/Forum/Reply.aspx?ID=<?=$post['id']?>">
                        <img src="/images/newpost.gif" alt="Reply" style="vertical-align: middle;">
                    </a>
                    <a href="/report/?id=<?=$post['id']?>&type=0">Report Abuse</a>
                </div>

                <?php if($_USER["administrator"] == "yes") { ?>
                    <div class="moderation-panel">
                        <strong>Moderate:</strong>
                        <a href="/Forum/Moderate/DeletePost.aspx?PostID=<?=$post['id']?>">Delete Post</a> |
                        <a href="#" onclick="editPost(<?=$post['id']?>)">Edit Post</a> |
                        <a href="#" onclick="showModerationHistory(<?=$post['id']?>)">Moderation History</a> |
                        <a href="#" onclick="movePost(<?=$post['id']?>)">Move Post</a>
                    </div>
                <?php } ?>
            </td>
        </tr>

        <?php } ?>

        <!-- Bottom Navigation -->
        <tr>
            <td class="forumHeaderBackgroundAlternate" colspan="2">
                <div class="thread-navigation">
                    <span></span>
                    <div>
                        <a href="/Forum/ShowPost.aspx?ID=<?=$id-1?>">Previous Thread</a>
                        <span> or </span>
                        <a href="/Forum/ShowPost.aspx?ID=<?=$id+1?>">Next Thread</a>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <!-- Pagination -->
    <div class="pagination-container">
        <span>
            <?php
            if($numberofpages == 0) {
                echo "Page $page of 1";
            } else {
                echo "Page $page of $numberofpages";
            }
            ?>
        </span>
        
        <div>
            <span>Go to page: </span>
            <?php
            if($numberofpages == 0) {
                echo "<a href='/Forum/ShowPost.aspx?ID=$id&page=1'>1</a>";
            } else {
                for ($p=1; $p<=$numberofpages; $p++) {
                    echo "<a href='/Forum/ShowPost.aspx?ID=$id&page=$p'>$p</a>";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
