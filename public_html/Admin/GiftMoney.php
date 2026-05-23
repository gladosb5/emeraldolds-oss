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

if(isset($_POST['gift'])){
    if($_POST['currency'] == "tix"){
	$a = "Tickets";
	$label = 'Tickets';
	$column = 'tix';
	}else{
	$a = "emeraldnews";
	$label = 'EmeraldNews';
	$column = 'robux';
	}
    $id = (int)$_POST['userid'];
    $count = (int)$_POST['count'];
    $stmt = $conn->prepare("UPDATE users SET $column = $column + ? WHERE id = ?");
    $stmt->bind_param("di", $count, $id);
    $stmt->execute();
    $stmt->close();
	context::sendMessageWithBotAccount("Currency Gift", "The Administrator {$_USER['username']} gifted you {$count} {$label}.", $id, true, null, 0);
}

?>
<main class="admin-page" aria-labelledby="gift-currency">
    <h1 id="gift-currency" class="admin-title">Gift currency</h1>
    <p class="admin-subtitle">Send tix or emeraldnews to players when resolving support requests.</p>

    <form class="admin-form" method="POST" aria-label="Gift currency form">
        <div class="admin-field">
            <label for="gift-user">User ID</label>
            <input class="admin-input" id="gift-user" type="text" name="userid" placeholder="Enter the user id" required>
        </div>

        <div class="admin-field">
            <label for="gift-amount">Amount</label>
            <input class="admin-input" id="gift-amount" type="number" name="count" placeholder="How many to send" min="1" required>
        </div>

        <div class="admin-field">
            <fieldset class="admin-radio-group" aria-label="Currency type">
                <legend style="font-weight:700; color:var(--admin-strong);">Currency</legend>
                <label><input type="radio" name="currency" value="tix" checked> Tix</label>
                <label><input type="radio" name="currency" value="robux"> emeraldnews</label>
            </fieldset>
        </div>

        <div class="admin-actions">
            <button class="admin-button" type="submit" name="gift" value="gift">Send gift</button>
            <p class="admin-helper">Recipients will receive a message noting who sent the currency.</p>
        </div>
    </form>
</main>
<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>


