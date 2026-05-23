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

?>
<title>emeraldnews - Staff Rules</title>
<main class="admin-page" aria-labelledby="staff-rules">
    <h1 id="staff-rules" class="admin-title">Staff rules</h1>
    <p class="admin-subtitle">Keep these expectations in mind whenever you moderate or update the site.</p>
    <ol class="admin-list">
      <li>You may <strong>NOT</strong> use or register to emeraldnews if you are under the age of 13.</li>
      <li>Do not abuse vulnerabilities in the client, or the site for your own personal gain. This includes "exploits", "hacks" or vulnerabilities as they should be reported to an administrator.</li>
      <li>Scamming is not allowed whatsoever. The person you scammed will immediately be given their money back and you will receive a penalty on your account.</li>
      <li>NSFW content is not permitted on the site.</li>
      <li>"DDoSing" the site/spamming requests is strictly prohibited. You will be automatically <strong>IP banned</strong> unless you are reporting it to an administrator.</li>
      <li>Do not "dox" nor blackmail other users on the site.</li>
      <li>Please don't copy games from Roblox without permission from us.</li>
      <li>Please use common sense.</li>
      <li>Do not upload sexual content on our website, this includes stuff such as erotic roleplays on our forum, messages, descriptions, nor ingame. Your ingame chatlogs are logged by us and can be viewed at any time.</li>
      <li>Do not share your account with anyone, especially in an event where the register is closed or that your friend doesn't have an invite key. We may close your account for this. (This is not enforced if it is excused or given special permission from an administrator.)</li>
      <li>Do not use HTML or anything similar from our website without permission or fully crediting the <a href="/User.aspx?ID=12" target="_blank">owner</a> of this website.</li>
      <li>Do not Tix/emeraldnews "farm" or in other words to make alt accounts with the purpose of buying your own clothes or anything similar in an attempt to give yourself currency.</li>
      <li>You are not allowed to harass people, for example spamming someone's inbox or sending threats to them, or using hate speech against them. Another example is leaking their personal information. Also, the "common sense" rule heavily applies to this.</li>
    </ol>
    <p class="admin-helper"><strong>Doing anything listed above can result in a consequence, such as your account being temporarily/permanently disabled.</strong></p>
    <div class="admin-actions">
        <a class="admin-button secondary" href="https://emeraldolds.glados.pro/Default.aspx" target="_blank">Go Home</a>
        <a class="admin-button secondary" href="https://emeraldolds.glados.pro/info/About.aspx" target="_blank">About Us</a>
        <a class="admin-button secondary" href="https://emeraldolds.glados.pro/info/Privacy.aspx" target="_blank">Privacy Policy</a>
    </div>
</main>
<?php

include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>



