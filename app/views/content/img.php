<?php
 



$string = '';

$character="6";

$karakterler = "1234567890abcdefghijklmnopqrstuvwxyz";

for ($i = 0; $i < $character; $i++) {

	// this numbers refer to numbers of the ascii table (lower case)

	$string .=$karakterler{rand(0,35)};

}

   

Session::set("guvenlik", $string);

 
 
$fontDir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'fonts/';
 
 


$image 			= imagecreatetruecolor(180, 70);



$textColor 		= imagecolorallocate($image, 255, 255, 255  ); // 

$imageBgColor 	= imagecolorallocate($image,  250, 40, 50);





imageline($image, 50, 50, 50, 60, IMG_COLOR_BRUSHED);

imagefilledrectangle($image,0,0,399,99,$imageBgColor);

$text="Vancat.org";

imagettftext ($image, 30, 0, 10, 40, $textColor, $fontDir."cp.ttf", Session::get("guvenlik"));

imagettftext ($image, 10, 0, 20, 70, $textColor, $fontDir."cp.ttf", $text);


header("Content-type: image/png");    
imagepng($image);

   

  
