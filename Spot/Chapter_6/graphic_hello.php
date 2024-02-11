<?php
// Set the correct content type
header('Content-Type: image/png');

// Create our basic image stream
$image = imagecreate(125, 125);

// Set the background color
$bg = imagecolorallocate($image, 0, 0, 255);

// Set the text color
$txt_color = imagecolorallocate($image, 0, 0, 0);

// Set the text
imagestring($image, 4, 5, 18, "Hello", $txt_color);

// Output the image as PNG
imagepng($image);

// Clear up memory used
imagedestroy($image);
?>
