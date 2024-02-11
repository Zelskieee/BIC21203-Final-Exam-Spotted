<?php
$x = 10;
$y = 5;

// Equal to
$isEqual = $x == $y;  // Result: false

// Identical to (value and type)
$isIdentical = $x === $y;  // Result: false

// Not equal to
$isNotEqual = $x != $y;  // Result: true

// Not identical to (value or type)
$isNotIdentical = $x !== $y;  // Result: true

// Greater than
$isGreaterThan = $x > $y;  // Result: true

// Less than
$isLessThan = $x < $y;  // Result: false

echo "Comparison Operations:\n";
echo "Equal: " . ($isEqual ? 'true' : 'false') . "\n";
echo "Identical: " . ($isIdentical ? 'true' : 'false') . "\n";
echo "Not Equal: " . ($isNotEqual ? 'true' : 'false') . "\n";
echo "Not Identical: " . ($isNotIdentical ? 'true' : 'false') . "\n";
echo "Greater Than: " . ($isGreaterThan ? 'true' : 'false') . "\n";
echo "Less Than: " . ($isLessThan ? 'true' : 'false') . "\n";
?>
