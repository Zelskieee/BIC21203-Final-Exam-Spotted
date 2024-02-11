<?php
include 'db.php';

// Check if 'matric' is set in URL
if(isset($_GET['matric'])) {
    $matric = $_GET['matric'];

    // Prepare a select statement
    $sql = "SELECT matric, name, accessLevel FROM users WHERE matric = ?";

    if($stmt = mysqli_prepare($conn, $sql)) {
        // Set parameters
        $param_matric = $matric;

        // Bind variables to the prepared statement
        mysqli_stmt_bind_param($stmt, "s", $param_matric);

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1) {
                /* Fetch result row as an associative array. */
                if($row = mysqli_fetch_assoc($result)) {
                    // Retrieve individual field value
                    $name = $row["name"];
                    $accessLevel = $row["accessLevel"];
                }
                } else {
                    // URL doesn't contain valid matric. Redirect or error message
                    header("location: error.php");
                    exit();
                }

            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        // URL doesn't contain matric. Redirect or error message
        header("location: error.php");
        exit();
    }
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate and update the data in database
    
    // Prepare an update statement
    $sql = "UPDATE users SET name = ?, accessLevel = ? WHERE matric = ?";

    if($stmt = mysqli_prepare($conn, $sql)){
        // Set parameters
        $param_name = $_POST["name"];
        $param_accessLevel = $_POST["accessLevel"];
        $param_matric = $_POST["matric"];

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_accessLevel, $param_matric);

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records updated successfully. Redirect to landing page
            header("location: read.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="icon" href="./image/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/updateform.css">
</head>
<body>
    <h2>Update User</h2>
    <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="post">
        <div>
            <label>Matric</label>
            <input type="text" name="matric" value="<?php echo $matric; ?>" readonly>
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div>
            <label>Access Level</label>
            <input type="text" name="accessLevel" value="<?php echo $accessLevel; ?>">
        </div>
        <div>
            <input type="submit" value="Update">
            <a href="read.php">Cancel</a>
        </div>
    </form>
</body>
</html>