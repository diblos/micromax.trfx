<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>SAMPLE</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
<!-- 	<link href="//vjs.zencdn.net/4.9.0/video-js.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/4.9.0/video.js"></script>
 -->	<link href="assets/css/style.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

  </head>
<!-- NAVBAR
================================================== -->
  <body>

    <?php
    include('nav.php');
    ?>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->



      <!-- <hr class="featurette-divider"> -->

     <!--  <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <a href="show.php"><img class="featurette-image img-responsive center-block img-rounded" src="files/Jigsaw_puzzle_01_by_Scouten.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <a href="show.php"><img class="featurette-image img-responsive center-block img-rounded" src="files/ketupat____by_afif508.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <a href="show.php"><img class="featurette-image img-responsive center-block img-rounded" src="files/restaurants_images_62.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider"> -->

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



echo ('<h1 class="statetitle">'.$json->StateName.'</h1>');
echo ('<hr class="featurette-divider">');

// echo (count($json->Packages));

// ================================================================
foreach($json->Packages AS $mydata)
{
  $count=$count+1;

echo ('<div class="row featurette">');
if($count & 1){
  $str1 ='<div class="col-md-7">';
  $str2 ='<div class="col-md-5">';
  $float = 'btn-right';
}else{
  $str1 ='<div class="col-md-7 col-md-push-5">';
  $str2 ='<div class="col-md-5 col-md-pull-7">';
  $float = 'btn-left';
}
echo ($str1);
echo ('<h3 class="featurette-heading">'.strtotitle($mydata->PackageDesc).'</h3>');
echo ('<p class="lead">'.$mydata->PackageDetails->overview.'</p>');
echo ('</div>');
echo ($str2);
// echo ('<a href="card.php?p='.$mydata->PackageID.'"><img class="featurette-image img-responsive center-block img-rounded" src="files/restaurants_images_62.jpg" alt="Generic placeholder image"></a>');
// echo ('<img class="featurette-image img-responsive center-block img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode($mydata->PackageDetails->images[0]->imageURL).'&w=600&p=true" alt="'.$mydata->PackageDetails->images[0]->imageCaption.'">');
echo ('<img class="featurette-image img-responsive center-block img-rounded" src="http://www.tourifix.com/img.php?f='.urlencode($mydata->PackageDetails->images[0]->imageURL).'&w=600&h=450&p=false" alt="'.$mydata->PackageDetails->images[0]->imageCaption.'">');
echo ('<p class="'.$float.'"><a class="btn btn-primary btn-lg" href="card.php?p='.$mydata->PackageID.'" role="button">View Details</a></p>');
echo ('</div>');
echo ('</div>');
echo ('<hr class="featurette-divider">');

}
// ================================================================
?>


      <!-- /END THE FEATURETTES -->

      <!-- <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          Panel content
        </div>
      </div> -->



    </div><!-- /.container -->

      <!-- FOOTER -->
      <div class="<?php echo(($count > 1 ? 'footer-fix1' : 'footer-fix2')) ?>">

      <?php
      include('footer.php');
      ?>

      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
