<?php
session_start();
function getWardrobeItems($type, $page = 1) {
    switch($type) {
        case 69: // most zesty
            return [
                ["id" => 1, "name" => "boyi", "image" => "", "type" => "head"],
                ["id" => 2, "name" => "moses", "image" => "", "type" => "head"],
            ];
        case 6: // most werrirdest
            return [
                ["id" => 1, "name" => "manfred", "image" => "", "type" => "face"],
                ["id" => 2, "name" => "moses", "image" => "", "type" => "face"],
                ["id" => 3, "name" => "jing xiang", "image" => "", "type" => "face"],
                ["id" => 4, "name" => "vernon", "image" => "", "type" => "face"],
            ];
        case 5: // mos tfunny
            return [
                ["id" => 1, "name" => "cavan???", "image" => "", "type" => "hat"]
            ];
        case 2: // most epic
            return [
                ["id" => 1, "name" => "nobody is epic here", "image" => "", "type" => "tshirt"]
            ];
        case 3: // most brainrot
            return [
                ["id" => 1, "name" => "shermaine", "image" => "", "type" => "shirt"],
                ["id" => 2, "name" => "rong luo", "image" => "", "type" => "shirt"],
                ["id" => 3, "name" => "annabelle", "image" => "", "type" => "shirt"],
                ["id" => 4, "name" => "yona", "image" => "", "type" => "shirt"],
            ];
        case 4: // most favourited
            return [
                ["id" => 1, "name" => "chloe", "image" => "", "type" => "pants"]
            ];
        default:
            return [];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'] ?? 5;
    $page = $_POST['page'] ?? 1;
    $wardrobeItems = getWardrobeItems($type, $page);

    foreach ($wardrobeItems as $item) {
        echo '<div class="clothe">';
        echo '<div class="imgc">';
        echo '<img class="img" src="' . $item['image'] . '" alt="' . $item['name'] . '">';
        echo '</div>';
        echo '<div class="name">' . $item['name'] . '</div>';
        echo '</div>';
    }
    exit;
}
?>
