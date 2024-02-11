<!DOCTYPE html>
<html>
<head>
    <title>MajuApparel Login</title>
</head>
<body>
    <h2>MajuApparel Login</h2>

    <form action="login_process.php" method="post">
        <label for="email">Email/Username:</label>
        <input type="text" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>

    <p><a href="forgot_password.php">Forgot Password?</a></p>
    <p>New User? <a href="registration.php">Register Here</a></p>
</body>
</html>
