<?php
// header("Content-type: text/xml; charset=utf-8");
// header("Content-type: text/plain; charset=utf-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
ini_set('error_reporting', E_ERROR);

$_POST = json_decode(file_get_contents('php://input'), true);
$url=urldecode($_POST["u"]);

$fungsi=$_POST["f"];
$stateid=$_POST["s"];
$packageid=$_POST["p"];

if(!$url){$url='ByStates.json';}
if(!$fungsi){$fungsi='SELECT_STATE';}// DISABLED ON DEPLOYED
if(!$stateid){$stateid=4;}// DISABLED ON DEPLOYED
if(!$packageid){$packageid='PRK1';}// DISABLED ON DEPLOYED

$contents = file_get_contents($url);

switch ($fungsi) {
    case 'GET_STATES':
        $json =json_decode($contents);
        GET_STATES($json);
        break;
    case 'SELECT_STATE':
        $json =json_decode($contents);
        SELECT_STATE($json,$stateid);
        break;
    case 'SELECT_PKG':
        $json =json_decode($contents);
        SELECT_PKG($json,$packageid);
        break;
    case 'SELECT_RND';
        $json =json_decode($contents);
        GET_RND($json);
        break;
    default:
        print_r($contents);
}

function GET_STATES($obj){
 foreach($obj AS $mydata)
    {
        unset($mydata->Packages);
    }
    print_r(json_encode($obj));
}

function SELECT_STATE($obj,$sid){
 foreach($obj AS $mydata)
    {
        if($mydata->State_id==$sid){
          $state=$mydata;
          break;
        }
    }
    print_r(json_encode($state));
}

function SELECT_PKG($obj,$sid){
 foreach($obj AS $mydata)
    {
      foreach($mydata->Packages AS $mypakej){
          if($mypakej->PackageID==$sid){
            $pakej=$mypakej;
            break;
          }
      }
    }
    print_r(json_encode($pakej));
}

function GET_RND($obj){
 $r = new stdClass();
 $arr_pkg = array();
 foreach($obj AS $mydata)
    {
        foreach($mydata->Packages AS $mymy) array_push($arr_pkg,$mymy);
    }
    $r->count = count($arr_pkg);
    $r->data = $arr_pkg;
    print_r(json_encode($r));
}
?>
