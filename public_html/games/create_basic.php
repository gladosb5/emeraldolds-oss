<?php
include $_SERVER['DOCUMENT_ROOT'] . '/api/includes.php';

if ($logged === 'no') {
    header('Location: /Login/Default.aspx');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Create News (Basic)</title>
</head>
<body>
    <h1>Create News (Basic)</h1>
    <p>This page is a simple backup creator.</p>

    <form id="basic-news-form" method="post" action="/games/create_basic_submit.php">
        <label for="name">News title</label>
        <br>
        <input id="name" name="name" type="text" maxlength="100" required>
        <br><br>

        <label for="description">News description</label>
        <br>
        <textarea id="description" name="description" rows="6" cols="50"></textarea>
        <br><br>

        <p>Thumbnail</p>
        <label>
            <input type="radio" name="thumbnail" value="0" checked>
            Default thumbnail
        </label>
        <br>
        <label>
            <input type="radio" name="thumbnail" value="1">
            Aesthetic thumbnail
        </label>
        <br>
        <label>
            <input type="radio" name="thumbnail" value="2">
            Baseplate thumbnail
        </label>
        <br><br>

        <button type="submit">Create news</button>
    </form>

    <p id="form-message"></p>

    <script src="/games/create_basic.js"></script>
</body>
</html>
