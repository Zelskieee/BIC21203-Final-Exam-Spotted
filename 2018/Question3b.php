<html>
<body>

<?php

$num1 = 24;
$num2 = 5;

echo "Greeting with Function <br>";

function fun1($t) {
    if ($t < 10) {
        echo "<br>Have a good morning!";
    } elseif ($t < 20) {
        echo "<br>Have a good day!";
    } elseif ($t < 25) {
        echo "<br>Have a good night!";
    } else {
        echo "<br>Out of range";
    }
}

function fun2(&$num1, &$num2) {
    $num1 -= 10;
    $num2 *= 5;
}

fun1($num1);
fun1($num2);
fun2($num1, $num2);
fun1($num1);
fun1($num2);
?>
</body>
</html>
