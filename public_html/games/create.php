<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no")
{
  header("Location: /Login/Default.aspx");
  exit();
}

$real = mysqli_query($conn,"SELECT * FROM games WHERE creator_id = {$_USER['id']}");

$counter = 0;

while($row = mysqli_fetch_assoc($real)) {
    $counter++;
}

if($counter > 2 && $_USER['administrator'] !== "yes") {
    header("Location: /Default.aspx");
  exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['new'])) {
        $new = (int)$_POST['new'];
        $tokenn = generateRandomString(128);
        if($new == 0 || $new == 1 || $new == 2) {
            $name = htmlspecialchars($_USER['username']) . "s Place Number: " . (mysqli_num_rows($real) + 1);
            $place = mysqli_query($conn, "INSERT INTO games (name, description, creator_id, secretkey) VALUES ('$name','','{$_USER['id']}','$tokenn')") or die(mysqli_error($conn));

            $real2 = mysqli_insert_id($conn);
        } else {
            echo 'Invalid selection';
            exit();
        }

        $source = "";
        if($new == 0) {
            $source = $_SERVER["DOCUMENT_ROOT"] . "/Starter/happyhome.rbxl";
            $source2 = $_SERVER["DOCUMENT_ROOT"] . "/images/HappyHomeBig.png";
            $source3 = $_SERVER["DOCUMENT_ROOT"] . "/images/HappyHomeSmall.png";
        } elseif($new == 1) {
            $source = $_SERVER["DOCUMENT_ROOT"] . "/Starter/startingbrickbattle.rbxl";
            $source2 = $_SERVER["DOCUMENT_ROOT"] . "/images/BrickBattleBigNew.png";
            $source3 = $_SERVER["DOCUMENT_ROOT"] . "/images/BrickBattleSmall.png";
        } elseif($new == 2) {
            $source = $_SERVER["DOCUMENT_ROOT"] . "/Starter/baseplate.rbxl";
            $source2 = $_SERVER["DOCUMENT_ROOT"] . "/images/EmptyBaseBig.png";
            $source3 = $_SERVER["DOCUMENT_ROOT"] . "/images/BaseplateSmall.png";
        }

        $destination = $_SERVER["DOCUMENT_ROOT"] . "/asset/places/$tokenn.rbxl";
        $destination2 = $_SERVER["DOCUMENT_ROOT"] . "/Thumbs/PlaceAssetCache/$real2.png";
        $destination3 = $_SERVER["DOCUMENT_ROOT"] . "/Thumbs/PlaceAssetCache/$real2-small.png";
        
        // if (copy($source, $destination)) { // Commented out to prevent .rbxl file creation
        // } else {
        //     echo "creatred, cehck your news mjuhauhja";
        //     exit();
        // }
        if (copy($source2, $destination2)) {
        } else {
            echo "WTFFF IMAGE EDITION????.";
            exit();
        }
        if (copy($source3, $destination3)) {
        } else {
            echo "WTFFF REALLY SMALL IMAGE EDITION????.";
            exit();
        }
        header("Location: /my/Place.aspx?ID=$real2");
        exit();
    } else {
        echo 'Invalid request';
    }
}
?>
<title>glados - Create news</title> 
<div id="Body">
<span style="font-size:24px; margin: 270px; text-align: center;">which image</span>
<br>
<br>
<span style="font-size:16px; text-align: center; margin: 280px;">This will be used to yes.</span>
<br>
<p><a href="/games/create_basic.php">Use basic backup news creator</a></p>
<br>
<form action="" method="post">
    <table id="PlaceSelections" cellspacing="0" cellpadding="10" align="Center" border="0" style="border-collapse:collapse;">
        <tbody><tr>
          <td align="center" valign="middle" style="color:#003399;background-color:White;">
            <a supportsalphachannel="false" title="Happy Home in Robloxia" style="display:inline-block;height:140px;width:240px;cursor:pointer;">
              <button type="submit" name="new" value="0" style="all: unset;"><img src="/images/HappyHomeBig.png" width="240" height="140" border="0" id="img" alt="Happy Home in Robloxia"></button>
            </a>
            <br>
            <span style="font-size: 14px;">default news picture</span>
          </td><td align="center" valign="middle" style="color:#003399;background-color:White;">
            <a supportsalphachannel="false" title="Starting BrickBattle Map" style="display:inline-block;height:140px;width:240px;cursor:pointer;">
              <button type="submit" name="new" value="1" style="all: unset;"><img src="/images/BrickBattleBigNew.png" width="240" height="140" border="0" id="img" alt="Starting BrickBattle Map"></button>
            </a>
            <br>
            <span style="font-size: 14px;">aesthetic default news picture</span>
          </td>
        </tr>
        <tr>
          <td align="center" valign="middle" style="color:#003399;background-color:White;">
            <a supportsalphachannel="false" title="Empty Baseplate" style="display:inline-block;height:140px;width:240px;cursor:pointer;">
              <button type="submit" name="new" value="2" style="all: unset;"><img src="/images/EmptyBaseBig.png" width="240" height="140" border="0" id="img" alt="Empty Baseplate"></button>
            </a>
            <br>
            <span style="font-size: 14px;">not so aesthetic default news picture</span>
          </td>
          <td>
          </td>
        </tr>
    </tbody></table>
</form>
        </div>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
