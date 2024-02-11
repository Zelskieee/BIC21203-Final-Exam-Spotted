<!DOCTYPE html>
<html>
<head>
    <title>Customer Records</title>
</head>
<body>
    <h2>Customer Records</h2>
    
    <form action="display_records.php" method="get">
        <label for="search_name">Search by Customer Name:</label>
        <input type="text" name="search_name">
        <input type="submit" value="Search">
    </form>

    <?php
   
    include('db.php');

    // Process search query
    $search_name = isset($_GET['search_name']) ? $_GET['search_name'] : '';

    // Query to select records from CustInfo table based on customer name
    $sql = "SELECT * FROM CustInfo WHERE customer_name LIKE '%$search_name%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
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
</body>
</html>
