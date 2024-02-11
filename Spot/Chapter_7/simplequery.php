<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CompanyDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example INSERT statement
$sqlInsert = "INSERT INTO employees (first_name, last_name, job_title, salary)
              VALUES ('John', 'Doe', 'Software Engineer', 75000)";

if ($conn->query($sqlInsert) === TRUE) {
    echo "New record inserted successfully<br>";
} else {
    echo "Error: " . $sqlInsert . "<br>" . $conn->error;
}

// Example UPDATE statement
$sqlUpdate = "UPDATE employees
              SET salary = 80000
              WHERE first_name = 'John' AND last_name = 'Doe'";

if ($conn->query($sqlUpdate) === TRUE) {
    echo "Record updated successfully<br>";
} else {
    echo "Error: " . $sqlUpdate . "<br>" . $conn->error;
}

// Example DELETE statement
$sqlDelete = "DELETE FROM employees
              WHERE first_name = 'John' AND last_name = 'Doe'";

if ($conn->query($sqlDelete) === TRUE) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error: " . $sqlDelete . "<br>" . $conn->error;
}

// Example SELECT statement
$sqlSelect = "SELECT first_name, last_name, job_title, salary FROM employees";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["first_name"]. " " . $row["last_name"]. " - Job Title: " . $row["job_title"]. " - Salary: $" . $row["salary"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
