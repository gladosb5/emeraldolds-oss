<?php
require_once __DIR__ . '/includes/security.php';

header('Content-Type: application/json; charset=UTF-8');
header('X-Robots-Tag: noindex');

$response = [
    'Status' => 'OK',
    'UserInfo' => [
        'UserID' => 1,
        'UserName' => 'UsernameHere',
        'RobuxBalance' => 0,
        'TicketsBalance' => 0,
        'IsAnyBuildersClubMember' => false,
        'ThumbnailUrl' => 'http://yourthumbnail.here/or_this_can_be_a_blank',
    ],
];

try {
    echo json_encode($response, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
    http_response_code(500);
}
