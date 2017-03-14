<?php
require_once('inc/configs.php');
require_once('inc/methods.php');
?>
<nav class="navbar navbar-default navbar-fixed-top">
<!-- <nav class="navbar navbar-inverse navbar-fixed-top"> -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="index.php"><span id="logo">can<span>show</span></span></a> -->
      <a class="navbar-brand" href="<?php echo(ROOT); ?>index.php"><img src="<?php echo(ROOT); ?>assets/img/tourifix.png" alt="tourifix"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Channels</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-globe"></span> Destinations <span class="caret"></span></a>
          <ul class="dropdown-menu">
<!--             <li><a href="product1.php">Adventure</a></li>
            <li><a href="product2.php">Family</a></li>
            <li><a href="product3.php">Nature</a></li>
            <li><a href="product4.php">Honeymoon</a></li>
            <li><a href="product4.php">Wildlife</a></li>
            <li><a href="product4.php">Religious</a></li>
            <li><a href="product4.php">Water Activities</a></li> -->

<?php


$data = array("u" => "ByStates.json", "f" => "GET_STATES");
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

foreach($json AS $mydata)
{
echo('<li><a href="'.ROOT.'list.php?s='.$mydata->State_id.'">'.strtotitle($mydata->StateName).'</a></li>');
}

?>

          </ul>
        </li>
        <!-- <li><a href="#about">About</a></li> -->
        <!-- <li><a href="#contact">Contact</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-sort"></span> View <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Recently Added</a></li>
            <li><a href="#">Most Popular</a></li>
            <li><a href="#">Recommended</a></li>
<!-- 	<li><a href="list.php">A-Z Sorting</a></li>
	<li><a href="list.php">Z-A Sorting</a></li> -->
            <!-- <li role="separator" class="divider"></li> -->
            <!-- <li class="dropdown-header">Nav header</li> -->
            <!-- <li><a href="#">Premium</a></li> -->
          </ul>
        </li>
<li><a href="#search"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
<ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo(ROOT); ?>triprequest" id="btnInquire">Customize Tour</a></li>
    <li><a href="<?php echo(ROOT); ?>signin.php" id="btnLogin">Login</a></li>
    <li><a href="<?php echo(ROOT); ?>register.php" id="btnRegister">Register</a></li>
  </ul>
    </div>
  </div>
</nav>
