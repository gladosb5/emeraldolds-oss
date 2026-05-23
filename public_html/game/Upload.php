<?php
error_reporting(E_ALL);

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
echo $_USER['username'];
echo '<button onClick="javascript:Upload(\'http://emeraldolds.glados.pro/asset/uploadGame.aspx?uid='. $_USER['id'] .'\')">Upload</button>'
?>


&nbsp;
<script>
    function Upload(uploadLink){
        //check if we are in IE - cause it means we most likely in Roblossss 
        // var Content = window.external.write(); // Commented out to disable upload
        // Content.Upload(uploadLink); // Commented out to disable upload
        alert("The upload has completed!");
    }
    // automatically setted to test user and placeid 1 for now
</script>


