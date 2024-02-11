<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="./image/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/register.css">
    <script>
        function showMessage(message, redirectUrl) {
            alert(message);
            window.location.href = redirectUrl;
        }
    </script>
</head>
<body>

<form action="insert.php" method="post" class="registration-form" onsubmit="showMessage('Registration successful!', 'index.php')">

    <div class="image-container">
        <img src="./image/logo.png" alt="Registration Image" width="110px" height="200px">
    </div>

    <h1>Register</h1>

    <label for="matric">Matric</label>
    <input type="text" name="matric" id="matric" required>

    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <label for="accessLevel">Role</label>
    <select name="accessLevel" id="accessLevel" required>
        <option value="">Please select</option>
        <option value="Lecturer">Lecturer</option>
        <option value="Student">Student</option>
    </select>

    <input type="submit" name="submit" value="Submit">

    <p>Don't have an account? <a href="index.php" class="a">Click here</a>.</p>

</form>

</body>
</html>
