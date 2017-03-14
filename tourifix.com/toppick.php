<?php

$data = array("u" => "ByStates.json", "f" => "SELECT_RND");
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
$max = $json->count;

for ($x = 1; $x <= 3; $x++) {

    echo '<div id="toppick_r'.$x.'" class="row">';
    $t = rand ( 1 , 200 );
    echo '<div class="col-lg-4">';
    echo '<div class="thumbnail">';
    echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode($json->data[$t]->PackageDetails->images[0]->imageURL).'&w=400&h=300&p=false" alt="'.$json->data[$t]->PackageDetails->images[0]->imageCaption.'" >';
    echo '<div class="caption">';
    echo '<h2>'.$json->data[$t]->PackageDesc.'</h2>';
    echo '<p>'.$json->data[$t]->PackageDetails->overview.'</p>';
    echo '<p><a class="btn btn-primary" href="card.php?p='.$json->data[$t]->PackageID.'" role="button">View details &raquo;</a></p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    $t = rand ( 1 , 200 );
    echo '<div class="col-lg-4">';
    echo '<div class="thumbnail">';
    echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode($json->data[$t]->PackageDetails->images[0]->imageURL).'&w=400&h=300&p=false" alt="'.$json->data[$t]->PackageDetails->images[0]->imageCaption.'" >';
    echo '<div class="caption">';
    echo '<h2>'.$json->data[$t]->PackageDesc.'</h2>';
    echo '<p>'.$json->data[$t]->PackageDetails->overview.'</p>';
    echo '<p><a class="btn btn-primary" href="card.php?p='.$json->data[$t]->PackageID.'" role="button">View details &raquo;</a></p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    $t = rand ( 1 , 200 );
    echo '<div class="col-lg-4">';
    echo '<div class="thumbnail">';
    echo '<img class="img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode($json->data[$t]->PackageDetails->images[0]->imageURL).'&w=400&h=300&p=false" alt="'.$json->data[$t]->PackageDetails->images[0]->imageCaption.'" >';
    echo '<div class="caption">';
    echo '<h2>'.$json->data[$t]->PackageDesc.'</h2>';
    echo '<p>'.$json->data[$t]->PackageDetails->overview.'</p>';
    echo '<p><a class="btn btn-primary" href="card.php?p='.$json->data[$t]->PackageID.'" role="button">View details &raquo;</a></p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    echo '</div>';

}
?>
