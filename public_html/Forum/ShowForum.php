<?php
/* -------------------------------------------------
   PHP SET-UP (unchanged)
------------------------------------------------- */
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if (isset($_GET['ID'])) {
    $topic = (int)$_GET['ID'];
} else {
    header("Location: /Error.aspx");
}
$topic = intval($topic);

$cisadjkuias = mysqli_query($conn,"SELECT * FROM forum_topics WHERE id = $topic");
if (mysqli_num_rows($cisadjkuias) < 1) header("Location: /Error.aspx");
$topicshit = mysqli_fetch_assoc($cisadjkuias);

$groupq = mysqli_query($conn,"SELECT * FROM forum_groups WHERE sort_order = {$topicshit['parent']}");
$group  = mysqli_fetch_assoc($groupq);

/* pagination numbers */
$threadsperpage   = 20;
$total            = mysqli_num_rows(mysqli_query($conn,"SELECT id FROM forum WHERE category='$topic' AND reply_to='0'"));
$pages            = ceil($total / $threadsperpage);
$page             = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$page             = min($page, $pages ?: 1);
$offset           = ($page - 1) * $threadsperpage;

/* main thread query */
$fq = mysqli_query(
        $conn,
        "SELECT * FROM forum 
         WHERE category='$topic' AND reply_to='0' 
         ORDER BY is_pinned DESC, time_posted DESC 
         LIMIT $offset,$threadsperpage"
     ) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>emeraldnews – forum</title>

    <!-- ---------- Modernised stylesheet ---------- -->
    <style>
        :root{
            --green-400:#1bb273;
            --green-600:#118b58;
            --green-700:#0e7d56;
            --grey-050:#f8f9fb;
            --grey-100:#f1f3f6;
            --grey-200:#e5e7eb;
            --grey-300:#d1d5db;
            --text-dark:#1a202c;
            --text-light:#66788b;
            --radius:6px;
            --shadow:0 1px 3px rgba(0,0,0,.08);
            --font:"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
        }

        /* ---------- page background changed to grey ---------- */
        html,body{
            height:100%;
            margin:0;
            font:14px/1.45 var(--font);
            color:var(--text-dark);
            background:var(--grey-100);            /* <-- here */
        }

        /* main container */
        .forum-wrapper{
            max-width:1000px;
            margin:48px auto;
            padding:20px 24px 32px;
            background:#fff;
            border-radius:var(--radius);
            box-shadow:var(--shadow);
        }

        /* table */
        .forum-table{width:100%;border-collapse:collapse;}
        .forum-table thead th{
            background:var(--green-600);
            color:#fff;
            text-align:left;
            padding:12px 10px;
            font-weight:600;
            position:sticky;top:0;
        }
        .forum-table td{
            padding:10px 10px;
            border-bottom:1px solid var(--grey-300);
            vertical-align:middle;
        }
        .forum-table tbody tr:nth-child(even) td{background:var(--grey-050);}
        .forum-table tbody tr:hover  td{background:var(--grey-200);}

        /* text helpers */
        .thread-title a{
            color:var(--green-700);
            font-weight:600;
            text-decoration:none;
        }
        .thread-title a:hover{text-decoration:underline;}
        .small{font-size:.85em;color:var(--text-light);}

        .status-icon{width:22px;height:22px;}

        /* pagination */
        .pagination{
            display:flex;
            flex-wrap:wrap;
            justify-content:space-between;
            align-items:center;
            padding:12px 0 0;
            font-weight:600;
        }
        .pagination a{
            margin:0 4px;
            text-decoration:none;
            color:var(--green-700);
        }
        .pagination a:hover{color:var(--green-400);}
    </style>
</head>
<body>

<div class="forum-wrapper">

    <!-- breadcrumb -->
    <p style="margin:0 0 12px;font-weight:600 color: blue;">
        <a href="/Forum/ShowForumGroup.aspx?ForumGroupID=<?=$group['sort_order']?>" style="color: blue;"><?=$group['name']?></a>
        &nbsp;&raquo;&nbsp;
        <a href="/Forum/ShowForum.aspx?ID=<?=$topic?>" style="color: blue;"><?=$topicshit['name']?></a>
    </p>

    <!-- new thread -->
    <p style="margin:0 0 16px">
        <a href="/Forum/CreatePost.aspx?t=<?=$topic?>">
            <img src="/Forum/api/skins/default/images/newtopic.gif" alt="Start new thread">
        </a>
    </p>

    <!-- thread list -->
    <table class="forum-table">
        <thead>
            <tr>
                <th style="width:35px"></th>
                <th>Thread</th>
                <th style="width:120px">Started&nbsp;By</th>
                <th style="width:70px" align="center">Replies</th>
                <th style="width:70px" align="center">Views</th>
                <th style="width:170px" align="center">Last&nbsp;Post</th>
            </tr>
        </thead>
        <tbody>
<?php
while ($post = mysqli_fetch_assoc($fq)) {

    $author   = mysqli_fetch_assoc(mysqli_query($conn,"SELECT username FROM users WHERE id='{$post['author']}'"));
    $replies  = mysqli_num_rows(mysqli_query($conn,"SELECT id FROM forum WHERE reply_to='{$post['id']}'"));
    if ($replies > 0){
        $lastreply    = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM forum WHERE reply_to='{$post['id']}' ORDER BY id DESC LIMIT 1"));
        $lrauthor     = mysqli_fetch_assoc(mysqli_query($conn,"SELECT id,username FROM users WHERE id='{$lastreply['author']}'"));
        $lrtimeago    = date('d M Y h:i A', $lastreply['time_posted']);
        $lastPostHTML = "<b>$lrtimeago</b><br>by <a href='/User.aspx?ID={$lrauthor['id']}' style=\"color: black;\">{$lrauthor['username']}</a>";
    } else {
        $lrtime       = date('d M Y h:i A', $post['time_posted']);
        $lastPostHTML = "<b>$lrtime</b><br>by <a href='/Forum/User/UserProfile.aspx?UserName={$author['username']}' style=\"color: black;\">{$author['username']}</a>";
    }

    /* status icon */
    if (!$post['is_locked']){
        $postimagelol = $post['is_pinned']
            ? '/Forum/api/skins/default/images/topic-pinned_notread.gif'
            : '/Forum/api/skins/default/images/topic_notread.gif';
    } else {
        $postimagelol = $post['is_pinned']
            ? '/Forum/api/skins/default/images/topic-popular.gif'
            : '/Forum/api/skins/default/images/topic-locked_notread.gif';
    }

    /* views */
    $views = mysqli_num_rows(mysqli_query($conn,"SELECT id FROM forum_views WHERE post_id='{$post['id']}'"));
?>
            <tr>
                <td><img class="status-icon" src="<?=$postimagelol?>" alt=""></td>
                <td class="thread-title">
                    <a href="/Forum/ShowPost.aspx?ID=<?=$post['id']?>" style="color: black;"><?=htmlspecialchars($post['title'])?></a>
                </td>
                <td class="small">
                    <a href="/Forum/User/UserProfile.aspx?UserName=<?=$author['username']?>" style="color: black;"><?=$author['username']?></a>
                </td>
                <td class="small" align="center"><?=$replies?></td>
                <td class="small" align="center"><?=$views?></td>
                <td class="small" align="center"><?=$lastPostHTML?></td>
            </tr>
<?php } ?>
        </tbody>
    </table>

    <!-- pagination -->
    <div class="pagination">
        <span style="color: black;">Page <?=$page?> of <?=$pages ?: 1?></span>
        <span>
           <p style="color: black;">
<?php
for ($p=1;$p<=$pages||$p==1;$p++){
    echo "<a href='/Forum/ShowForum.aspx?ID=$topic&page=$p'>$p</a>";
}
?>
           </p>
        </span>
    </div>
</div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
</body>
</html>
