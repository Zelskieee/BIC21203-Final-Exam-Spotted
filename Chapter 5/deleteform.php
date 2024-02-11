<?php
// Include database connection file
include 'db.php';

// Check if 'matric' is provided in the URL
if(isset($_GET["matric"])){
    // Prepare a delete statement
    $sql = "DELETE FROM users WHERE matric = ?";

    if($stmt = mysqli_prepare($conn, $sql)){

        // Set parameters
        $param_matric = $_GET["matric"];

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_matric);

        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Record deleted successfully. Redirect to landing page
            header("location: delete.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
// Close statement
mysqli_stmt_close($stmt);
} else {
    // If no 'matric' parameter in URL, do error handling or redirection
    // Redirect to error page or display an error message
    echo "Error: No matric value found.";
}

// Close connection
mysqli_close($conn);
?>
