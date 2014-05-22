<?php
/*function ImageToBlackAndWhite($im) {

    for ($x = imagesx($im); $x--;) {
        for ($y = imagesy($im); $y--;) {
            $rgb = imagecolorat($im, $x, $y);
            $r = ($rgb >> 16) & 0xFF;
            $g = ($rgb >> 8 ) & 0xFF;
            $b = $rgb & 0xFF;
            $gray = ($r + $g + $b) / 3;
            if ($gray < 0xFF) {

                imagesetpixel($im, $x, $y, 0xFFFFFF);
            }else
                imagesetpixel($im, $x, $y, 0x000000);
        }
    }

    imagefilter($im, IMG_FILTER_NEGATE);

}
ImageToBlackAndWhite('add_view_s3p_verified.png');


*/
?>


<?php


function convert_in_to_BW($originalFileName,$destinationFileName){
    // replace with your files
/*    $originalFileName    = "Sunset.jpg";
    $destinationFileName = "Sunset.jpg";
*/   
    // create a copy of the original image
    // works with jpg images
    // fell free to adapt to other formats ;)
    $fullPath = explode(".",$originalFileName);
    $lastIndex = sizeof($fullPath) - 1;
    $extension = $fullPath[$lastIndex];
    if (preg_match("/jpg|jpeg|JPG|JPEG/", $extension)){
        $sourceImage = imagecreatefromjpeg($originalFileName);
    }

    // get image dimensions
    $img_width  = imageSX($sourceImage);
    $img_height = imageSY($sourceImage);

    // convert to grayscale
    // note: this will NOT affect your original image, unless
    // originalFileName and destinationFileName are the same
    for ($y = 0; $y <$img_height; $y++) {
        for ($x = 0; $x <$img_width; $x++) {
            $rgb = imagecolorat($sourceImage, $x, $y);
            $red   = ($rgb >> 16) & 0xFF;
            $green = ($rgb >> 8)  & 0xFF;
            $blue  = $rgb & 0xFF;

            $gray = round(.299*$red + .587*$green + .114*$blue);
           
            // shift gray level to the left
            $grayR = $gray << 16;   // R: red
            $grayG = $gray << 8;    // G: green
            $grayB = $gray;         // B: blue
           
            // OR operation to compute gray value
            $grayColor = $grayR | $grayG | $grayB;

            // set the pixel color
            imagesetpixel ($sourceImage, $x, $y, $grayColor);
            imagecolorallocate ($sourceImage, $gray, $gray, $gray);
        }
    }

    // copy pixel values to new file buffer
    $destinationImage = ImageCreateTrueColor($img_width, $img_height);
    imagecopy($destinationImage, $sourceImage, 0, 0, 0, 0, $img_width, $img_height);

    // create file on disk
    imagejpeg($destinationImage, $destinationFileName);
   
    // destroy temp image buffers
    imagedestroy($destinationImage);   
    imagedestroy($sourceImage);
	}
	
convert_in_to_BW('Blue hills.jpg','Blue hills.jpg');
?>
