<?php
   // Set the correct content type 
   header('content-type: image/png');
 
   // Create our basic image stream 
   $image = imagecreate(125, 125);
 
   // Set the background color
   $bg = imagecolorallocate($image, 0, 0, 255);

   // Set the line color
   $line_color = imagecolorallocate($image, 0, 0, 0);

   // Draw ellipse
   imageellipse($image, 65, 25, 100, 40, $line_color);
 
   // Save the image as a png and output 
   imagepng($image);
 
   // Clear up memory used
   imagedestroy($image);
?>
