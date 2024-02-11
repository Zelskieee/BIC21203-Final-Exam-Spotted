<?php

// Indexed Arrays - Automatic Index Assignment
$fruitsAutoIndex = ["Apple", "Banana", "Orange"];

// Indexed Arrays - Manual Index Assignment
$fruitsManualIndex = [];
$fruitsManualIndex[] = "Apple";
$fruitsManualIndex[] = "Banana";
$fruitsManualIndex[] = "Orange";

// Display Indexed Arrays
echo "Auto-Indexed Array (Fruits): ";
print_r($fruitsAutoIndex);

echo "\nManual-Indexed Array (Fruits): ";
print_r($fruitsManualIndex);

// Associative Arrays - Automatic Index Assignment
$personAutoAssoc = ["name" => "John", "age" => 25, "city" => "New York"];

// Associative Arrays - Manual Index Assignment
$personManualAssoc = [];
$personManualAssoc["name"] = "Alice";
$personManualAssoc["age"] = 30;
$personManualAssoc["city"] = "Los Angeles";

// Display Associative Arrays
echo "\n\nAuto-Associative Array (Person): ";
print_r($personAutoAssoc);

echo "\nManual-Associative Array (Person): ";
print_r($personManualAssoc);

// Multidimensional Arrays
$shapesAndColors = [
    ["Square" => "Red", "Circle" => "Blue", "Triangle" => "Green"],
    ["Square" => "Yellow", "Circle" => "Purple", "Triangle" => "Orange"],
    ["Square" => "Pink", "Circle" => "Brown", "Triangle" => "Gray"]
];

// Accessing and displaying the arrays
echo "\n\nMultidimensional Array (Shapes and Colors): ";
print_r($shapesAndColors);
?>
