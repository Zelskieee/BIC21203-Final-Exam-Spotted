<html>
<body>

<form action="save.php" method="post">
     Name: <input type="text" name="name"/>
     DOB: <input type="text" name="dob"/>
     Phone: <input type="text" name="phone"/>
     <input type="submit" />
</form>

</body>
</html>

<?php
// 1. Include db.php for database connection
include 'db.php';

// 2. Codes to insert record
$sql = "INSERT INTO Persons (id, name, dob, phone)
        VALUES ($id, '$_POST[name]', '$_POST[dob]', '$_POST[phone]')";
echo "1 record added.";

// 3. Close connection
mysqli_close($conn);
?>

<?php
// 1. Database connection
include 'db.php'; // Assuming you have a file named db.php with database connection code

// 2. Codes to update record
$sql = "UPDATE Persons
        SET name = 'Kamal'
        WHERE id = '1234'";
mysqli_query($conn, $sql);

// 3. Close connection
mysqli_close($conn);
?>

<?php
// 1. Database connection
include 'db.php'; // Assuming you have a file named db.php with database connection code

// 2. Codes to delete record
$sql = "DELETE FROM Persons
        WHERE id = '1234'";
mysqli_query($conn, $sql);

// 3. Close connection
mysqli_close($conn);
?>
