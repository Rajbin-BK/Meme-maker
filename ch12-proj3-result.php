<?php

// Validate or sanitize the input data if necessary

if (isset($_GET['file']) && isset($_GET['width'])) {
    // Retrieve and decode the filename
    $file = urldecode($_GET['file']);

    // Validate and sanitize the filename to prevent security issues
    // For example, you might want to ensure that the filename is alphanumeric and contains only allowed characters.

    // Retrieve the width
    $width = $_GET['width'];

    // Validate and sanitize the width if needed

    // Construct the path to the image
    $img_path = "images/$file.jpg";

    // Check if the file exists
    if (file_exists($img_path)) {
        // Set the Content-Type header to indicate it's an image
        header('Content-Type: image/jpeg');

        // Create the image from the file
        $img = imagecreatefromjpeg($img_path);

        // Resize the image to the specified width (height will be the same)
        $newimg = imagescale($img, $width, $width);

        // Add text to the image if text parameters are provided
        if (isset($_GET['text1'])) {
            $text1 = urldecode($_GET['text1']);
            $size1 = $_GET['size1'];

            // Validate and sanitize text and size if needed

            // Add text to the image
            $fontFile = realpath('font/Lato-Medium.ttf');
            $fontSize = $size1;
            $textColor = imagecolorallocate($newimg, 238, 238, 238);
            imagettftext($newimg, $fontSize, 0, 150, 40, $textColor, $fontFile, $text1);
        }

        // Add text to the image if text parameters are provided
        if (isset($_GET['text2'])) {
            $text2 = urldecode($_GET['text2']);
            $size2 = $_GET['size2'];

            // Validate and sanitize text and size if needed

            // Add text to the image
            $fontFile = realpath('font/Lato-Medium.ttf');
            $fontSize = $size2;
            $textColor = imagecolorallocate($newimg, 238, 238, 238);
            imagettftext($newimg, $fontSize, 0, 100, 400, $textColor, $fontFile, $text2);
        }

        // Output the image
        imagejpeg($newimg);
        imagedestroy($img);
        imagedestroy($newimg);
        exit;
    } else {
        // Handle the case where the file does not exist
        echo "Image not found!";
    }
} else {
    // Handle the case where filename or width parameters are not provided
    echo "Invalid request!";
}



