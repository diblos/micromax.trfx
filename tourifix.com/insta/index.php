<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Display Instagram Posts On Website - LEVEL 1 - Live Demo</title>
 
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
 
</head>
<body>
 
<div class="container">
<div class="row">
 
<div class="col-lg-12">
    <div class="page-header">
        <h1>Display Instagram Feed On Website - LEVEL 1 - Live Demo</h1>
    </div>
</div>

<!-- https://www.codeofaninja.com/2015/01/display-instagram-feed-website.html -->

<!-- Instagram feed will be here -->
<?php
// use this instagram access token generator http://instagram.pixelunion.net/
$access_token="1901819859.1677ed0.cce935d10ac446e182ee00116b5822af";
$photo_count=9;
     
$json_link="https://api.instagram.com/v1/users/projectpopart/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";

$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

// OLDER
// $json = file_get_contents($json_link);
// $obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);

foreach ($obj['data'] as $post) {
     
    $pic_text=$post['caption']['text'];
    $pic_link=$post['link'];
    $pic_like_count=$post['likes']['count'];
    $pic_comment_count=$post['comments']['count'];
    $pic_src=str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
    $pic_created_time=date("F j, Y", $post['caption']['created_time']);
    $pic_created_time=date("F j, Y", strtotime($pic_created_time . " +1 days"));
     
    echo "<div class='col-md-4 col-sm-6 col-xs-12 item_box'>";        
        echo "<a href='{$pic_link}' target='_blank'>";
            echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$pic_text}'>";
        echo "</a>";
        echo "<p>";
            echo "<p>";
                echo "<div style='color:#888;'>";
                    echo "<a href='{$pic_link}' target='_blank'>{$pic_created_time}</a>";
                echo "</div>";
            echo "</p>";
            echo "<p>{$pic_text}</p>";
        echo "</p>";
    echo "</div>";
}

?>
 
</div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
</body>
</html>