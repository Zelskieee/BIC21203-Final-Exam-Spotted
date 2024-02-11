<?php

// Variables
$name = "John";
$age = 25;
$isStudent = true;

// Numbers and arithmetic expressions
$number1 = 10;
$number2 = 5;
$sum = $number1 + $number2;
$difference = $number1 - $number2;
$product = $number1 * $number2;
$quotient = $number1 / $number2;

// Strings
$greeting = "Hello, ";
$message = "Welcome to PHP programming!";
$fullMessage = $greeting . $name . ". " . $message;

// Boolean values and expressions
$hasPermission = false;
$isAdult = $age >= 18;
$canEnter = $isAdult && $hasPermission;

// Displaying output
echo "Name: $name\n";
echo "Age: $age\n";
echo "Is Student: " . ($isStudent ? 'Yes' : 'No') . "\n";
echo "\nArithmetic Operations:\n";
echo "Sum: $sum\n";
echo "Difference: $difference\n";
echo "Product: $product\n";
echo "Quotient: $quotient\n";
echo "\nStrings:\n";
echo $fullMessage . "\n";
echo "\nBoolean Values and Expressions:\n";
echo "Has Permission: " . ($hasPermission ? 'Yes' : 'No') . "\n";
echo "Is Adult: " . ($isAdult ? 'Yes' : 'No') . "\n";
echo "Can Enter: " . ($canEnter ? 'Yes' : 'No') . "\n";

?>
