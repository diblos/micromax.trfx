
    <?php
    require_once('inc/configs.php'); 
    require_once('inc/methods.php'); 
    ?>


<?php

$stateid=urldecode($_REQUEST["s"]);

$data = array("u" => "ByStates.json", "f" => "SELECT_STATE", "s" => $stateid);
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init(ROOT.'inc/data.php');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
$json =json_decode($result);
$count = 0;

echo ('<h3>'.$json->StateName.'</h3>');
echo ('<hr>');

// echo (count($json->Packages));

// ================================================================
foreach($json->Packages AS $mydata)
{
  $count=$count+1;

echo ('<div class="row featurette">');
if($count & 1){
  $str1 ='<div class="col-md-7">';
  $str2 ='<div class="col-md-5">';
}else{
  $str1 ='<div class="col-md-7 col-md-push-5">';
  $str2 ='<div class="col-md-5 col-md-pull-7">';
}
echo ($str1);
echo ('<h3 class="featurette-heading">'.strtotitle($mydata->PackageDesc).'</h3>');
echo ('<p class="lead">'.$mydata->PackageDetails->overview.'</p>');
echo ('</div>');
echo ($str2);
// echo ('<a href="card.php?p='.$mydata->PackageID.'"><img class="featurette-image img-responsive center-block img-rounded" src="files/restaurants_images_62.jpg" alt="Generic placeholder image"></a>');
echo ('<a href="card.php?p='.$mydata->PackageID.'"><img class="featurette-image img-responsive center-block img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode($mydata->PackageDetails->images[0]->imageURL).'&w=600&p=true" alt="Generic placeholder image"></a>');
echo ('</div>');
echo ('</div>');
echo ('<hr class="featurette-divider">');

}
// ================================================================

// echo $json->Packages[0];

// for ($i = 0; $i < count($json->Packages); ++$i) {
//   $count=$count+1;

//   echo ('<div class="row featurette">');
//   if($count & 1){
//     $str1 ='<div class="col-md-7">';
//     $str2 ='<div class="col-md-5">';
//   }else{
//     $str1 ='<div class="col-md-7 col-md-push-5">';
//     $str2 ='<div class="col-md-5 col-md-pull-7">';
//   }
//   echo ($str1);
//   echo ('<h3 class="featurette-heading">'.strtotitle($json->Packages[$i]->PackageDesc).'</h3>');
//   echo ('<p class="lead">'.$json->Packages[$i]->PackageDetails->overview.'</p>');
//   echo ('</div>');
//   echo ($str2);
//   // echo ('<a href="card.php?p='.$mydata->PackageID.'"><img class="featurette-image img-responsive center-block img-rounded" src="files/restaurants_images_62.jpg" alt="Generic placeholder image"></a>');
//   echo ('<a href="card.php?p='.$json->Packages[$i]->PackageID.'"><img class="featurette-image img-responsive center-block img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode($json->Packages[$i]->PackageDetails->images[0]->imageURL).'&w=600&p=true" alt="Generic placeholder image"></a>');
//   echo ('</div>');
//   echo ('</div>');
//   echo ('<hr class="featurette-divider">');
// }
// ================================================================
?>