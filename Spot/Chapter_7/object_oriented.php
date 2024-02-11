<?php

// 1. Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = new mysqli($servername, $username, $password, $database);

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// 3. Write query and fetch results
$query = "SELECT * FROM tablename";
$result = $conn->query($query);

// 4. Display results
if ($result->num_rows > 0) {
    // Fetching the first row
    $row = $result->fetch_assoc();
    echo $row['table_id'];
} else {
    echo "No results found";
}

// 5. Close connection
$conn->close();

?>
