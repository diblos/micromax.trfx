<?php
$ORDER_COUNT = 40;
$INVOICE_COUNT = 20;
$CLIENT_COUNT = 27;
$USER_COUNT = 12;
$MESSAGE_COUNT = 7;
$REPORT_COUNT = 11;
$ERROR_COUNT = 3;
$LOG_COUNT = 55;
$GALLERY_COUNT = 100;

session_start();
if(isset($_SESSION["login"])) {
  if($_SESSION["login"]=='FAIL') header('Location: login.php');;
}else{
  header('Location: login.php');
}

?>
