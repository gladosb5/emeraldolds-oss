<?php
  // Replace these with your Google API credentials
$client_id = getenv('GOOGLE_CLIENT_ID') ?: 'your_google_client_id';
$redirect_uri = getenv('GOOGLE_REDIRECT_URI') ?: 'http://localhost/Login/callback.php';

// Generate the URL
$login_url = 'https://accounts.google.com/o/oauth2/auth?' . http_build_query([
    'response_type' => 'code',
    'client_id' => $client_id,
    'redirect_uri' => $redirect_uri,
    'scope' => 'email profile',
    'access_type' => 'online',
]);

// Redirect the user to Google login
header('Location: ' . $login_url);
exit();

  ?>
