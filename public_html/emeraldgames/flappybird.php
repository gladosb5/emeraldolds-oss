<?php
include $_SERVER["DOCUMENT_ROOT"]."/api/includes.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/head.php";
include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/navbar.php";
?>
<h1>ant hates daxton!!!</h1>
<div class="container">
        <div class="game-title">
        </div>
        <div class="game-screen">
            <canvas id="game" width="300" height="500"></canvas>
            <p>this was made by https://github.com/noanonoa/flappy-bird/tree/96b76e61aef26ade2a96967c9d9784a5def8880b</p>
            <p>i just edited it i did not code it...</p>
            <p>at least im not using chatgpt codelolol</p>
            <p id="description" class="game-description">Press 'spacebar' or 'click' to begin</p>
        </div>
    </div>
    <script src="main.js"></script>

<?php include $_SERVER["DOCUMENT_ROOT"]."/api/WebsiteBuild/footer.php"; ?>