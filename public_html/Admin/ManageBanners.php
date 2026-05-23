<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

echo '<link rel="stylesheet" href="/Admin/admin-styles.css">';

if($logged == "no")
{
	header("Location: /Login/Default.aspx");
	exit();
}

if($_USER['administrator'] !== "yes"){
	header("Location: /Login/Default.aspx");
	exit();
}

$banners = "SELECT * FROM banners";
$real = mysqli_query($conn,$banners);

if (isset($_POST['upload'])) {
    $uploader = $_USER['id'];
	$text = htmlspecialchars($_POST['text']);
	if(!empty($text)) {
        $color = htmlspecialchars($_POST['color']);
        $textcolor = htmlspecialchars($_POST['textcolor']);
        
        $textcolorint = 0;
        
        if($textcolor == "black") {
            $textcolorint = 1;
        }
        $itemq = mysqli_query($conn, "INSERT INTO banners (text,color,textcolor,uploader) VALUES ('$text','$color','$textcolorint','$uploader')") or die(mysqli_error($conn));
        
        header("Location: https://emeraldolds.glados.pro/Admin/ManageBanners.aspx");
	}
	else {
        echo 'dont do that';
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    echo $id;
    // SCARY
    $itemq = mysqli_query($conn, "DELETE FROM banners WHERE id = $id") or die(mysqli_error($conn));
    
    header("Location: https://emeraldolds.glados.pro/Admin/ManageBanners.aspx");
    exit;
}

if (isset($_POST['clear'])) {
    // SCARY
    $itemq = mysqli_query($conn, "DELETE FROM banners") or die(mysqli_error($conn));
    $itemw = mysqli_query($conn, "ALTER TABLE banners AUTO_INCREMENT = 1") or die(mysqli_error($conn));
    header("Location: https://emeraldolds.glados.pro/Admin/ManageBanners.aspx");
    exit;
}

if (isset($_POST['finishedit'])) {
    $id = $_POST['id'];
    $text = htmlspecialchars($_POST['edittext']);
    $color = htmlspecialchars($_POST['editcolor']);
    $textcolor = htmlspecialchars($_POST['edittextcolor']);

    $textcolorint = 0;
    if ($textcolor == "black") {
        $textcolorint = 1;
    }

    $itemq = mysqli_query($conn, "UPDATE banners SET text='$text', color='$color', textcolor='$textcolorint' WHERE id=$id") or die(mysqli_error($conn));

    header("Location: https://emeraldolds.glados.pro/Admin/ManageBanners.aspx");
    exit;
}

?>
<script>
    function editBanner(id) {
        event.preventDefault();
        let field = document.getElementById('field' + id);
        let staticText = field.querySelector('#statictext');
        let staticColor = field.querySelector('#staticcolor');
        let staticTextColor = field.querySelector('#statictextcolor');
        let editText = field.querySelector('#edittext');
        let editColor = field.querySelector('#editcolor');
        let editTextColor = field.querySelector('#edittextcolor');
        let gbtns = field.querySelector('#gbtns');
        let gbtns2 = field.querySelector('#gbtns2');

        staticText.style.display = 'none';
        staticColor.style.display = 'none';
        staticTextColor.style.display = 'none';
        editText.style.display = 'block';
        editColor.style.display = 'block';
        editTextColor.style.display = 'block';
        gbtns.style.display = 'none';
        gbtns2.style.display = 'block';
    }
</script>

<main class="admin-page" aria-labelledby="manage-banners">
    <h1 id="manage-banners" class="admin-title">Manage banners</h1>
    <p class="admin-subtitle">Adjust announcement banners with clear contrast so everyone can read them.</p>

    <div class="admin-grid">
        <?php
        if($real) {
            while($row = mysqli_fetch_assoc($real)) {

                $textcolor = "White";
                if($row['textcolor'] == 1) {
                    $textcolor = "Black";
                }
                elseif ($row['textcolor'] == 0) {
                    $textcolor = "White";
                }
echo '<form class="admin-card admin-item-card" method="POST" action enctype="multipart/form-data">';
echo '    <fieldset id="field'.$row['id'].'">';
echo '        <input type="hidden" name="id" value="'.$row['id'].'">';
echo '        <legend>Banner '.$row['id'].'</legend>';
echo '        <p id="statictext" class="admin-muted-note">'. htmlspecialchars($row['text']) .'</p>';
echo '        <textarea id="edittext" name="edittext" rows="2" class="admin-textarea" style="display:none;">'. htmlspecialchars($row['text']) .'</textarea>';
echo '        <div class="admin-field">';
echo '            <label id="staticcolor" class="admin-color-preview">Color: <span class="admin-color-swatch" style="background-color: '. htmlspecialchars($row['color']) .';"></span> '. htmlspecialchars($row['color']) .'</label>';
echo '            <input id="editcolor" name="editcolor" type="color" value="'. htmlspecialchars($row['color']) .'" class="admin-input" style="display:none;">';
echo '        </div>';
echo '        <div class="admin-field">';
echo '            <div id="statictextcolor" class="admin-helper">Text color: '. htmlspecialchars($textcolor) .'</div>';
echo '            <fieldset id="edittextcolor" class="admin-radio-group" style="display:none;">';
echo '                <legend style="font-weight:700; color:var(--admin-strong);">Text Color</legend>';
echo '                <label><input type="radio" name="edittextcolor" value="white"'.($row['textcolor']==0?' checked':'').'> White</label>';
echo '                <label><input type="radio" name="edittextcolor" value="black"'.($row['textcolor']==1?' checked':'').'> Black</label>';
echo '            </fieldset>';
echo '        </div>';
echo '        <div class="admin-actions" id="gbtns">';
echo '            <button name="edit" id="edit" class="admin-button" type="submit" onclick="editBanner('.$row['id'].'); return false;">Edit</button>';
echo '            <button name="delete" id="delete" class="admin-button danger" type="submit" value="Delete">Delete</button>';
echo '        </div>';
echo '        <div class="admin-actions" id="gbtns2" style="display:none;">';
echo '            <button name="finishedit" id="finishedit" class="admin-button" type="submit" value="Finish Editing">Finish editing</button>';
echo '        </div>';
echo '    </fieldset>';
echo '</form>';

            }
        }
        ?>
    </div>

    <form class="admin-card admin-item-card" method="POST" action enctype="multipart/form-data" aria-label="Create banner">
        <fieldset>
            <legend>New banner</legend>
            <div class="admin-field">
                <label for="new-text">Text</label>
                <textarea name="text" rows="2" id="new-text" placeholder="Banner message" class="admin-textarea"></textarea>
            </div>
            <div class="admin-field">
                <label for="new-color" class="admin-color-preview">Background color</label>
                <input name="color" id="new-color" type="color" class="admin-input" value="#4f46e5">
            </div>
            <div class="admin-field">
                <fieldset class="admin-radio-group">
                    <legend style="font-weight:700; color:var(--admin-strong);">Text color</legend>
                    <label>
                      <input type="radio" name="textcolor" value="white" checked>
                      White
                    </label>
                    <label>
                      <input type="radio" name="textcolor" value="black">
                      Black
                    </label>
                </fieldset>
            </div>
            <div class="admin-actions">
                <button name="upload" id="upload" class="admin-button" type="submit" value="Create">Create</button>
                <button name="clear" id="clear" class="admin-button secondary" type="submit" value="Clear All">Clear all</button>
            </div>
        </fieldset>
    </form>
</main>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


