<?php

if (extension_loaded('gd') && function_exists('gd_info')) {
    $width = 400;
    $height = 200;

    $image = imagecreatetruecolor($width, $height);

    $white = imagecolorallocate($image, 255, 255, 255);
    
    imagefilledrectangle($image, 0, 0, $width, $height, $white);

    header("Content-Type: image/png");
    imagepng($image);
    imagedestroy($image);
} else {
    header("Content-Type: text/plain");
    echo "GD is not installed on your server.";
}

$color = imagecolorallocate($image, $red, $green, $blue);

?>