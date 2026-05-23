<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include $_SERVER["DOCUMENT_ROOT"] . "/api/database/connect.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/api/auth/UserCreation.php";

if (isset($_GET['code'])) {
    $client_id = getenv('GOOGLE_CLIENT_ID') ?: 'your_google_client_id';
    $client_secret = getenv('GOOGLE_CLIENT_SECRET') ?: 'your_google_client_secret';
    $redirect_uri = getenv('GOOGLE_REDIRECT_URI') ?: 'http://localhost/Login/callback.php';
    $code = $_GET['code'];

    // Exchange authorization code for access token
    $token_url = 'https://oauth2.googleapis.com/token';
    $post_data = [
        'code' => $code,
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'redirect_uri' => $redirect_uri,
        'grant_type' => 'authorization_code',
    ];

    $ch = curl_init($token_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    $response = curl_exec($ch);
    curl_close($ch);

    $response_data = json_decode($response, true);

    // Check if 'access_token' is set
    if (!isset($response_data['access_token'])) {
        die("Failed to get access token. Error: " . json_encode($response_data));
    }

    $access_token = $response_data['access_token'];

    // Get user information from Google
    $user_info_url = 'https://www.googleapis.com/oauth2/v2/userinfo?access_token=' . $access_token;
    $user_info_response = file_get_contents($user_info_url);
    $user_info = json_decode($user_info_response, true);

    // Check if 'email' and 'name' are set
    if (empty($user_info['email']) || empty($user_info['name'])) {
        die("Failed to get user info. Response: " . json_encode($user_info));
    }

    // Extract and sanitize user details
    $email = normalizeEmailForStorage($user_info['email']);

    // Restrict to only axcel.edu.my emails
    if (!str_ends_with($email, '@axcel.edu.my')) {
        die("Access denied: only axcel.edu.my emails are allowed.");
    }

    $userProfile = ensureUserWithProfile($db, $email, $user_info['name']);
    $user_id = (int) $userProfile['id'];

    createUserSession($db, $user_id);

    // Redirect to homepage
    header('Location: /');
    exit();
}
?>
