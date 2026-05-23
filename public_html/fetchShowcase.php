<?php
include $_SERVER["DOCUMENT_ROOT"] . "/api/includes.php";

$userId = isset($_GET['userId']) ? (int)$_GET['userId'] : 0;

if ($userId > 0) {
    $sql = "SELECT * FROM games WHERE creator_id = '$userId'";
    $result = $conn->query($sql);
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'name' => htmlspecialchars($row['name']),
            'id' => $row['id'],
            'visits' => $row['visits'],
            'description' => htmlspecialchars($row['description']),
            'thumbnail' => "/Thumbs/PlaceAsset.ashx?assetId={$row['id']}",
        ];
    }

    echo json_encode($data);
} else {
    echo json_encode([]);
}
