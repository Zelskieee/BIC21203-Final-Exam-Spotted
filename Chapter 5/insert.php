<?php

include 'db.php';

$matric = mysqli_real_escape_string($conn, $_POST['matric']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
$accessLevel = $_POST['accessLevel'];

$query = "INSERT INTO users (matric, name, password, accessLevel) VALUES ('$matric', '$name', '$password', '$accessLevel')";
$result = mysqli_query($conn, $query);

if ($result) {
    // Registration successful
    echo "<script>alert('Registration successful'); 
    window.location.href='index.php';</script>";
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
