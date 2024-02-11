<?php
// Create a new image with a white background
$image = imagecreatetruecolor(400, 200);

// Set the background color to white
$white = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $white);

// Add text to the image
$textColor = imagecolorallocate($image, 0, 0, 0);
imagettftext($image, 20, 0, 10, 50, $textColor, 'path/to/font.ttf', 'Hello, GD!');

// Manipulate the image (e.g., add a simple border)
$borderColor = imagecolorallocate($image, 0, 0, 0);
imagerectangle($image, 0, 0, 399, 199, $borderColor);

// Manipulate the text (e.g., change font color)
$newTextColor = imagecolorallocate($image, 255, 0, 0);
imagettftext($image, 20, 0, 10, 100, $newTextColor, 'path/to/font.ttf', 'Manipulated Text!');

// Output the image to the browser
header('Content-type: image/png');
imagepng($image);

// Free up memory
imagedestroy($image);
?>
