<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";

if ($logged !== "yes") {
    header("Location: /Login/Default.aspx");
    exit();
}
?>
<title>emeraldnews - Incidents</title>
<div id="Body">
    <div style="margin: 50px auto; width: 600px; border: 1px solid #000; background-color: #f5f5f5; padding: 20px; text-align: center;">
        <h2>Incidents</h2>
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: center; background-color: #000000;">
            <thead>
                <tr>
                    <th>Coming Soon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Check back later for updates on incidents.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>
