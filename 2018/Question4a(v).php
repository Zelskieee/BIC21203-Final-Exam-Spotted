<?php

include('db.php');

// Handle record deletion
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Query to delete record from CustInfo table based on customer ID
    $delete_sql = "DELETE FROM CustInfo WHERE customer_id = $delete_id";

    if ($conn->query($delete_sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>