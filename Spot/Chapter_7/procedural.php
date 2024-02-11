<?php

// 1. Database configuration
$hostname = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// 2. Connect to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// 3. Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

// 4. Prepare and execute query
$query = "SELECT * FROM tablename";
$result = mysqli_query($conn, $query);

// 5. Display results
while ($row = mysqli_fetch_assoc($result)) {
    // Access columns using $row['column_name']
    // Example: $name = $row['name'];
    // Perform your operations here
}

// 6. Close connection
mysqli_close($conn);

?>
