<?php
// Set the correct content type
header('content-type: image/png');

// Create our basic image stream
$image = imagecreate(125, 125);

// Set the background color
$bg = imagecolorallocate($image, 0, 0, 255);

// Set the text color
$txt_color = imagecolorallocate($image, 0, 0, 0);

// Set the text
imagettftext($image, 20, 0, 10, 30, $txt_color, 'C:\xampp\php\extras\fonts\ttf\Vera.ttf', 'Hello');

// Save the image as a png and output
imagepng($image);

// Clear up memory used
imagedestroy($image);
?>
