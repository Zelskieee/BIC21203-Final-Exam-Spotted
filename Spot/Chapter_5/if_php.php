<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driving Qualification Checker</title>
</head>
<body>

    <h1>Driving Qualification Checker</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="ageInput">Enter age:</label>
        <input type="number" name="ageInput" id="ageInput" placeholder="Enter age">

        <button type="submit" name="checkDrivingQualification">Check</button>
    </form>

    <?php
    // PHP code
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["checkDrivingQualification"])) {
        // Check driving qualification
        $age = $_POST["ageInput"];

        if ($age > 18) {
            // Qualifies for driving
            echo "<b>Qualifies for driving</b>";
        } else {
            // Does not qualify for driving
            echo "<b>Does not qualify for driving</b>";
        }
    }
    ?>

</body>
</html>
