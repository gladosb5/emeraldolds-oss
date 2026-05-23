<?php
$token = $_GET["token"];
$id = $_GET["placeId"];
header("content-type: text/plain; X-Robots-Tag: noindex;charset=UTF-8"); 
ob_start();
?>

print("Loading Place...")
game:Load("http://www.emeraldolds.glados.pro/game/get-place.ashx?placeId=<?=$id?>&token=<?=$token?>")


<?php
$data = "\r\n" . ob_get_clean();
$key = file_get_contents("./wFe8zLSH7R9I1K1DTxxQl5Aa.pem");
openssl_sign($data, $sig, $key, OPENSSL_ALGO_SHA1);
echo "%" . base64_encode($sig) . "%" . $data;
?>


