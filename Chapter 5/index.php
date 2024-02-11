<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./image/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>

<div class="login-form">
    <form action="authenticate.php" method="post">

        <div class="image-container">
            <img src="./image/logo.png" alt="Login Image" width="110px" height="200px">
        </div>

        <h1>Login</h1>

        <label for="matric">Matric</label>
        <input type="text" name="matric" id="matric">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="submit" name="submit" value="Submit">

<?php
if (isset($_GET['error'])) {
    $error_message = htmlspecialchars($_GET['error']);
    echo '<p style="color: red;">' . $error_message . '</p>';
}
?>


        <p>Don't have an account? <a href="register.php" class="a">Click here</a>.</p>

    </form>
</div>

</body>
</html>
