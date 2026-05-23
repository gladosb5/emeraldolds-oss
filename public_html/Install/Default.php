<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if($logged == "no"){
    header("Location: /Login/Default.aspx");
}   
?>
<title>emeraldnews Download</title> 
<div id="Body">
    

<div>
    
    
    
    
    
    
</div>

<p id="ctl00_cphRoblox_SystemRequirements1_OS" align="center" style="color: red">Currently, emeraldnews is only available on PCs running the Windows® operating system</p>

<div style="margin-top: 12px; margin-bottom: 12px">
    <div id="AlreadyInstalled" style="display: none">
        <p>emeraldnews is already installed on this computer. If you want to try installing it again then follow the instructions below. Otherwise, you can just <a href="javascript:goBack()">continue</a>.</p>
    </div>
    <img id="ctl00_cphRoblox_Image3" class="Bullet" src="/images/BuildIcon.png" border="0">
    <div id="InstallStep1" style="padding-left: 60px">
        <h2>You Can't download it yet.</h2>
        <!--<p><input type="submit" name="ctl00$cphRoblox$ButtonDownload" value="Install emeraldnews" id="ctl00_cphRoblox_ButtonDownload" enabled="enabled" class="BigButton" onclick="downloademeraldnews()">&nbsp;(Total download about 14Mb)</p>
--></div>
    <!--<img id="ctl00_cphRoblox_Image4" class="Bullet" src="/images/FriendsIcon.png" border="0">
    <div id="InstallStep2" style="padding-left: 60px">
        <h2>Run the Installer</h2>
        <p>A window will open asking what you want to do with a file called emeraldnews.exe.</p>
        <p>Click 'Run'. You might see a confirmation message, asking if you're sure you want to run this software. Click 'Run' again.</p>
        <p><img id="ctl00_cphRoblox_Image1" src="/images/Install/DownloadPrompt.png?v=2" border="0"></p>
    </div>
    <img id="ctl00_cphRoblox_Image5" class="Bullet" src="/images/BattleIcon.png" border="0">
    <div id="InstallStep3" style="padding-left: 60px">
        <h2>Follow the Setup Wizard</h2>
        <p>When the download has finished, the emeraldnews Setup Wizard will appear and guide you through the rest of the installation.</p>
        <p><img id="ctl00_cphRoblox_Image2" src="/images/Install/Wizard.png?v=2" border="0"></p>
    </div>-->
</div>

<script type="text/javascript">
    function isInstalled() {
        try { 
            var robloxClient = new ActiveXObject("RobloxInstall.Updater"); 
            return true;
        } catch (e) { 
            return false;
        } 
    }
    function goBack() {
        window.history.back();
    }
    function downloademeraldnews() {
        var link = document.createElement('a');
        link.href = 'emeraldnews.exe?v=2';
        link.download = 'emeraldnews.exe';
        link.style.display = 'none';
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
    function checkInstall() { 
        if (isInstalled()) { 
            // If we didn't fail, then we can move on
            document.getElementById("ctl00_cphRoblox_ButtonDownload").disabled = true;
            urchinTracker("InstallSuccess");
            Roblox.Install.Service.InstallSucceeded();
            goBack();
        } else {
            // Try again later 
            window.setTimeout("checkInstall()", 2000); 
        } 
    } 

    if (isInstalled()) {
        AlreadyInstalled.style.display="block";
    } else {
        window.setTimeout("checkInstall()", 1000);
    }
</script>

</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>



