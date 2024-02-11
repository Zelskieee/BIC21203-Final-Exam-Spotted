<?php
   // Step 1: Set the correct content type to inform the browser that the response is an image
   header('content-type: image/png');
 
   // Step 2: Create our basic image stream with dimensions 125x125 pixels
   $image = imagecreate(125, 125);
 
   // Step 3: Set the background color to blue (RGB: 0, 0, 255)
   $blueBG = imagecolorallocate($image, 0, 0, 255);
 
   // Step 4: Save the image as a PNG and output it to the browser
   imagepng($image);
 
   // Step 5: Clear up memory used by freeing the image resources
   imagedestroy($image);
?>
