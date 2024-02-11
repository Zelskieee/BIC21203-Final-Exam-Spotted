<?php
$host = "localhost";
$db_name = "Lab_7";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

