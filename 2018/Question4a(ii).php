<?php

include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];  // Note: Hash the password before storing in a production environment

    // Query to insert a new record into CustInfo table
    $sql = "INSERT INTO CustInfo (customer_name, address, phone_number, email, password) VALUES ('$customer_name', '$address', '$phone_number', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error adding record: " . $conn->error;
    }
}

$conn->close();
?>
