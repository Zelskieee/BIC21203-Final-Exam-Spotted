<?php
// Step 1: Set the correct content type 
header('content-type: image/jpeg');

// Step 2: Data Array
$data = array("3000","2470","225","663","6666","3456","789");

// Step 3: Image Setup
$height = 255;
$width = 320;
$image = imagecreate($width, $height);

// Step 4: Color Definitions
$white = imagecolorallocate($image, 240, 240, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$blue = imagecolorallocate($image, 0, 64, 128);

// Step 5: Drawing Axes
imageline($image, 10, 5, 10, 230, $black);
imageline($image, 10, 230, 300, 230, $black);

// Step 6: Drawing Bars
$x = 15;
$y = 230;
$x_width = 20;
$y_ht = 0;
$sum = array_sum($data);

for($i = 0; $i < 7; $i++) {
    $y_ht = ($data[$i] / $sum) * $height;
    imagefilledrectangle($image, $x, $y, $x + $x_width, ($y - $y_ht), $blue);
    imagestring($image, 2, $x - 1, $y + 10, $data[$i], $black);
    $x += ($x_width + 20);
}

// Step 7: Output and Cleanup
imagejpeg($image);
imagedestroy($image);
?>
