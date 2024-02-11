<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="icon" href="./image/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/delete.css">
</head>
<body>
    <div>
        <h1>Delete Data</h1>
    </div>

    <table border="1">
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
        <?php

        // The SQL query to fetch all records from the users table
        $sql = "SELECT matric, name, accessLevel FROM users";

        // Execute the query using mysqli_query
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // Fetch each row from the result set
            while($row = mysqli_fetch_assoc($result)) {
    
            ?>
            <tr>
                <td><?php echo $row["matric"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["accessLevel"]; ?></td>
                <td class="delete"><a href="deleterecord.php?matric=<?php echo $row["matric"]; ?>" class="delete-link">Delete</a></td>
            </tr>
    
            <?php
                    }   
                }
                else {
                    echo "<tr><td colspan='4'>No users found</td></tr>";
                }
                // Close connection
                mysqli_close($conn);
            ?>
        </table>
        
    </body>
    </html>