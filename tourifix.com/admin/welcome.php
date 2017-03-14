<?php
session_start();
$u = $_POST["uid"];
$p = $_POST["pwd"];
if(($u=='admin')&&($p=='password')){
  $_SESSION["login"] = "OK";
  header('Location: index.php');
}else{
  $_SESSION["login"] = "FAIL";
  header('Location: login.php');
}
?>
