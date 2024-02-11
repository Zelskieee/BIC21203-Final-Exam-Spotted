<?php

// Function to clean and sanitize user input
function cleanInput($input) {
    // Perform appropriate sanitization based on input type
    if (is_array($input)) {
        return array_map('cleanInput', $input);
    }

    // Example: Use htmlspecialchars for all input values
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

// Disable display_errors in production environment
ini_set('display_errors', 0);
// Enable log_errors for internal debugging
ini_set('log_errors', 1);

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Clean and assign user input to local variables
    $username = cleanInput($_POST['username']);
    $age = intval($_POST['age']);
    $comment = cleanInput($_POST['comment']);

    // Perform further processing with sanitized values
    // ...

    // Redirect if access is denied
    if ($noaccess) {
        header('Location: noaccess.php');
        exit();
    }
}

// Display content after form processing
echo "Welcome in the admin section";

?>
