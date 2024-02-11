<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Checker</title>
</head>
<body>

    <h1>Grade Checker</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="scoreInput">Enter score:</label>
        <input type="number" name="scoreInput" id="scoreInput" placeholder="Enter score">

        <button type="submit" name="checkGrade">Check</button>
    </form>

    <p id="result">
        <?php
        // PHP code
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["checkGrade"])) {
            // Check the grade
            $score = $_POST["scoreInput"];

            if ($score >= 90) {
                echo "<b>Grade: A</b>";
            } elseif ($score >= 80) {
                echo "<b>Grade: B</b>";
            } elseif ($score >= 70) {
                echo "<b>Grade: C</b>";
            } elseif ($score >= 60) {
                echo "<b>Grade: D</b>";
            } else {
                echo "<b>Grade: F (Fail)</b>";
            }
        }
        ?>
    </p>

</body>
</html>
