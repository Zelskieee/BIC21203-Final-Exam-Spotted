<?php
// Start session
session_start();

// Set session variables
$_SESSION['username'] = 'john_doe';
$_SESSION['user_id'] = 123;

// Destroy session
if (isset($_GET['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to a login page or wherever you want
    header("Location: login.php");
    exit();
}
?>
