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

// Display the food intake for each day
foreach ($foodIntake as $day => $foods) {
    echo "Food intake for $day are :<br><br>";
    
    foreach ($foods as $food => $gram) {
        echo "$food: $gram gram<br>";
    }

    echo "<br>";
}
?>
