<?php
 // http://lifesforlearning.com/connecting-to-the-flickr-api-with-php/

$api_key = '3a38cf92604605693a747f940c485b67';
 
 // ============================================
// $_POST = json_decode(file_get_contents('php://input'), true);
// $tag=$_POST["t"];
// if($tag===false){$tag ='malaysia';}//default image
// ============================================
$tag = array_key_exists('t', $_GET) ? $_GET['t'] : 'malaysia';
// ============================================
// $tag = 'flower,bird,peacock';
// $tag = 'malaysia';
// ============================================
$perPage = 25;
$url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
$url.= '&api_key='.$api_key;
$url.= '&tags='.$tag;
$url.= '&per_page='.$perPage;
$url.= '&format=json';
$url.= '&nojsoncallback=1';
 
$response = json_decode(file_get_contents($url));
$photo_array = $response->photos->photo;
 
// print ("<pre>");
// print_r($response);
// print ("</pre>");
 
foreach($photo_array as $single_photo){
 
$farm_id = $single_photo->farm;
$server_id = $single_photo->server;
$photo_id = $single_photo->id;
$secret_id = $single_photo->secret;
$size = 'm';
 
$title = $single_photo->title;
 
$photo_url = 'http://farm'.$farm_id.'.staticflickr.com/'.$server_id.'/'.$photo_id.'_'.$secret_id.'_'.$size.'.'.'jpg';
 
print "<img title='".$title."' src='".$photo_url."' />";
 
}
 
?>