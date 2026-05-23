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

if(isset($_POST['ban'])){
	$id = (int)$_POST['id'];
	$timeban = $_POST['timebanned'];
	$source = $_POST['source'];
	$reason = $_POST['reason'];
	$time = time();

	$ban_durations = [
		"0" => time(),
		"1" => time() + 86400,
		"2" => time() + 259200,
		"3" => time() + 604800,
		"4" => time() + 1209600,
		"5" => time() + 311040000,
	];

	$timeba = $ban_durations[$timeban] ?? null;
	if ($timeba === null) {
		echo "invalid timeban bro.";
		exit;
	}

	if(empty($reason)){
		$reason = "Do not create accounts for the purpose of breaking the rules.";
	}

	$stmt = $conn->prepare("INSERT INTO bans (userid, time, WhenReported, type, reason, haveAnythingElse, IsAssetBan, IsProfanityBan, unknownReason, Source, ExtraBanReason, IP, BannedFromRegistration) VALUES (?, ?, ?, ?, ?, 0, 0, 0, ?, ?, NULL, NULL, NULL)");
	$stmt->bind_param("iiiissss", $id, $timeba, $time, $timeban, $reason, $reason, $source);
	$stmt->execute() or die($stmt->error);
	$stmt->close();
}

?>
<main class="admin-page" aria-labelledby="ban-user">
    <h1 id="ban-user" class="admin-title">Ban someone</h1>
    <p class="admin-subtitle">Issue a reminder or ban with clear context so players understand next steps.</p>

    <form class="admin-form" method="POST" action aria-label="Ban user form">
        <div class="admin-field">
            <label for="user-id">User ID</label>
            <input class="admin-input" id="user-id" type="text" name="id" placeholder="Enter the user's id" required>
        </div>

        <div class="admin-field">
            <label for="timebanned">Ban length</label>
            <select class="admin-select" id="timebanned" name="timebanned" required>
                <option value="0">Reminder only</option>
                <option value="1">1 day ban</option>
                <option value="2">3 day ban</option>
                <option value="3">7 day ban</option>
                <option value="4">14 day ban</option>
                <option value="5">Account deleted</option>
            </select>
            <p class="admin-helper">Choose the lightest option that still protects the community.</p>
        </div>

        <div class="admin-field">
            <label for="source">Source</label>
            <input class="admin-input" id="source" type="text" name="source" placeholder="Where were the rules broken?" required>
        </div>

        <div class="admin-field">
            <label for="reason">Reason (optional)</label>
            <textarea class="admin-textarea" id="reason" name="reason" placeholder="Explain the rule violation in plain language."></textarea>
            <p class="admin-helper">If blank, a standard reminder is used.</p>
        </div>

        <div class="admin-actions">
            <button class="admin-button danger" type="submit" name="ban" value="ban">Ban user</button>
        </div>
    </form>
</main>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


