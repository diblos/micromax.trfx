<?php
// header("Content-type: image/png");
header("Content-type: image/jpeg");

// require_once('inc/configs.php'); 

$f = array_key_exists('f', $_GET) ? $_GET['f'] : 'http://1.bp.blogspot.com/-A3HqKqY_e70/UKvb1GDcrMI/AAAAAAAAABU/zthWZwSGSgs/s1600/Snorkelling+at+Kapalai+Island.jpg';
$w = array_key_exists('w', $_GET) ? $_GET['w'] : 160;
$h = array_key_exists('h', $_GET) ? $_GET['h'] : 160;
$p = array_key_exists('p', $_GET) ? $_GET['p'] : 'true';

@functionName($f,$w,$h,$p);
// functionName($f,$w,$h,$p);

function functionName($f,$w,$h,$p) {
$im = file_get_contents(urldecode($f));

if($im===false){$im = file_get_contents('http://localhost/lh/mgt/tourifix/files/home_03.jpg');}//default image

//$userImage64 = base64_encode($im);
// Decode base64 encoded image into Image
//$imgDecoded = base64_decode($userImage64);

$imgDecoded = $im;

// Requires string image as parm, returns image resource
$im = imagecreatefromstring($imgDecoded);

// Get width and height of original image resource
$origWidth = imagesx($im);
$origHeight = imagesy($im);

if($p==='true'){
    $h=$w*$origHeight/$origWidth;
}


// Create new destination image resource for new 24 x 24 image
//$imNew = imagecreatetruecolor(24, 24);
$imNew = imagecreatetruecolor($w, $h);

// Re-sample image to smaller size and display
imagecopyresampled($imNew, $im, 0, 0, 0, 0, $w, $h, $origWidth, $origHeight);
// imagepng($imNew);
imagejpeg($imNew);
imagedestroy($im);
imagedestroy($imNew);
}

?>
