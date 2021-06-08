<?php

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
} else {
    $msg = '';
}


$font           = 5; // Font size: 1 - 5
$img            = imagecreatetruecolor(500, 100); // Image rectagle size
$text           = $msg ; // Message to print in the image
$color          = imagecolorallocate($img, 255, 255, 255); // Colour RGB=white needs an image reference.
$size           = strlen($text); // Length of the string - used to center the text in the image.

$tw             = $size * imagefontwidth($font); // Image font width based on string lendth and font size.
$th             = imagefontheight($font); // Image font hight based on string lendth and font size.


// Create the image with the about details.
imagestring($img, $font, (imagesx($img) - $tw) / 2 , (imagesy($img) - $th) / 2, $text, $color);

// Set the HTTP header to image/jpage.
header('Content-type:image/jpeg');

// Flush the image down the line.
imagejpeg($img);

?>