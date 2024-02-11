<?php

include('db.php');

// Query to select all records from CustInfo table
$sql = "SELECT * FROM CustInfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Customer Records</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Customer ID</th><th>Customer Name</th><th>Address</th><th>Phone Number</th><th>Email</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['customer_id'] . "</td>";
        echo "<td>" . $row['customer_name'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['phone_number'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        // You can add more columns if needed
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

$conn->close();
?>
