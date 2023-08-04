<?php

// Get the authorization code from the query string.
$code = $_GET['code'];

// Create a new access token.
$access_token = get_access_token($code);

// Save the access token to a file.
file_put_contents('access_token.txt', $access_token);

// Redirect the user to the home page.
header('Location: /');
