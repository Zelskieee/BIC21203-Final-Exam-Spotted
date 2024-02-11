<?php
$hostname = "localhost";
$username = "username";
$password = "password";

try {
     $conn = new PDO("mysql:host=$hostname;dbname=myDB", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "Connected successfully";

     // perform your database operations here

     // close connection when done
     $conn = null;
} catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}
?>
