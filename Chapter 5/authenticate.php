<?php
include 'db.php';

if (isset($_POST['submit'])) {

    $matric = mysqli_real_escape_string($conn, $_POST['matric']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM users WHERE matric = '$matric'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            // Login successful, redirect to read.php
            session_start();
            $_SESSION['matric'] = $matric;
            header("Location: read.php");
            exit();
        } else {
            // Invalid password, display error message
            $error_message = "Invalid password";
        }
    } else {
        // Invalid matric, display error message
        $error_message = "Invalid matric";
    }

    // Redirect to index.php with error message
    header("Location: index.php?error=" . urlencode($error_message));
    exit();

    mysqli_close($conn);
}
?>
