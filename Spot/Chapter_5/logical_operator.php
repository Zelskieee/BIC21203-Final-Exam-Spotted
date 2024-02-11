<?php
$p = true;
$q = false;

// AND
$andResult = $p && $q;  // Result: false

// OR
$orResult = $p || $q;  // Result: true

// NOT
$notResult = !$p;  // Result: false

echo "Logical Operations:\n";
echo "AND: " . ($andResult ? 'true' : 'false') . "\n";
echo "OR: " . ($orResult ? 'true' : 'false') . "\n";
echo "NOT: " . ($notResult ? 'true' : 'false') . "\n";
?>
