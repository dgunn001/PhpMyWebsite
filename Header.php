<html>
 <head>
  <title>Darrien's Resume</title>
 </head>
 <body>
 <?php 
 #header('Content-Type: image/png');
 header("Content-Type: text/html; charset=ISO-8859-1");
#variable
 
 $im = imagecreatetruecolor(400, 30);
 $txt1 = "Darrien's Resume";
 $font = 'C:\xampp\htdocs\EventPage\bahnschrift.ttf';
 $grey = imagecolorallocate($im, 128, 128, 128);
 $pink = imagecolorallocate($im, 255, 192, 203);
 $white = imagecolorallocate($im, 255, 255, 255);
imagefilledrectangle($im, 0, 0, 399, 29, $white);
 #image shadowing
 imagettftext($im, 20, 0, 11, 21, $grey, $font, $txt1);
 #text Darrien's Resume
 imagettftext($im, 20, 0, 10, 20, $pink, $font, $txt1);
 imagepng($im);
 //imagedestroy($im);
 echo '<p>Hello World</p>'; 
 ?> 
 </body>
</html>
