<?php
   // Set the text
   $image = imagecreate(200, 50); // Assuming you have created an image resource
   $txt_color = imagecolorallocate($image, 255, 255, 255); // Assuming white text color
   
   // Replace the font path with the correct one on your system
   $font = 'C:\xampp\php\extras\fonts\ttf\Vera.ttf';

   imagettftext($image, 20, 0, 10, 30, $txt_color, $font, "Hello");
?>

<?php
// The text to draw
$text = 'Testing...';

// Create an image resource
$im = imagecreate(200, 50);

// Define colors
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);

// Replace the font path with the correct one on your system
$font = 'arial.ttf';

// Add some shadow to the text
imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

// Add the text
imagettftext($im, 20, 0, 10, 20, $black, $font, $text);
?>
