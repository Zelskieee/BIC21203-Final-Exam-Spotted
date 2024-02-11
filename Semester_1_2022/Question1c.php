<?php

// Define the food intake for two days using a multidimensional array
$foodIntake = array(
    "Monday" => array(
        "Lettuce" => 36,
        "Mushroom" => 96,
        "Rice" => 100
    ),
    "Tuesday" => array(
        "Chicken" => 200,
        "Noodle" => 300,
        "Egg" => 100
    )
);

// Conversion factor from grams to ounces
$gramsToOunces = 0.0357;

// Display the food intake for each day with ounces conversion
foreach ($foodIntake as $day => $foods) {
    echo "Food intake for $day are :<br><br>";
    
    foreach ($foods as $food => $gram) {
        $ounces = $gram * $gramsToOunces;
        echo "$food: $gram gram = " . number_format($ounces, 4) . " oz<br>";
    }

    echo "<br>";
}
?>
