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

// Display the food intake for each day using for loops
$days = array_keys($foodIntake);
$numDays = count($days);

for ($i = 0; $i < $numDays; $i++) {
    $day = $days[$i];
    echo "Food intake for $day are :<br><br>";

    $foods = $foodIntake[$day];
    $foodKeys = array_keys($foods);
    $numFoods = count($foodKeys);

    for ($j = 0; $j < $numFoods; $j++) {
        $food = $foodKeys[$j];
        $gram = $foods[$food];
        echo "$food: $gram gram<br>";
    }

    echo "<br>";
}
?>
