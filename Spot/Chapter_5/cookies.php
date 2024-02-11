<?php

// Creating a cookie
$cookieName = "user";
$cookieValue = "John Doe";
$expiryTime = time() + 3600; // Cookie will expire in 1 hour

setcookie($cookieName, $cookieValue, $expiryTime, "/"); // "/" means the cookie is available across the entire domain

echo "Cookie created successfully!<br>";

// Retrieving a cookie
if(isset($_COOKIE[$cookieName])) {
    $retrievedValue = $_COOKIE[$cookieName];
    echo "Cookie value retrieved: $retrievedValue<br>";
} else {
    echo "Cookie not found!<br>";
}

// Deleting a cookie
$deleteTime = time() - 3600; // Setting the expiry time to the past to delete the cookie

setcookie($cookieName, "", $deleteTime, "/"); // Empty value and past time to delete the cookie

echo "Cookie deleted successfully!<br>";

?>
