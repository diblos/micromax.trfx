<?php
$realdate = date("l, F j, Y, g:i a") ;
$ip = $_POST["ip"];		
$httpref = $_POST["httpref"];
$fullname = $_POST["fullname"] ;
$gender = $_POST["gender"] ;
$birthMonth = $_POST["birthMonth"] ;
$birthDay = $_POST["birthDay"] ;
$birthYear = $_POST["birthYear"] ;
$c_method = $_POST["c_method"] ;
$contact = $_POST["contact"] ;
$status = $_POST["status"] ;
$company = $_POST["company"] ;
$job = $_POST["job"] ;
$xp = $_POST["xp"] ;
$inc = $_POST["inc"] ;
$liabilities = $_POST["liabilities"] ;
$sideinc = $_POST["sideinc"] ;
$city = $_POST["city"] ;
$country = $_POST["country"] ;
$fnotes = $_POST["fnotes"] ;
$hnotes = $_POST["hnotes"] ;
$rnotes = $_POST["rnotes"] ;
$hobby = $_POST["hobby"] ;
$mnotes = $_POST["mnotes"] ;
$dnotes = $_POST["dnotes"] ;
$subject = 'FORMHD: '.$fullname;
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'From: nakedmaya.com <maya@nakedmaya.com>' . "\r\n";
$message = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
  "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head><title>'. $subject .'</title>
<style type="text/css">
.form_label{text-align: right;font: 11px tahoma;}
th{background:black;color:white;text-align: center;font: bold 11px tahoma;border: 1px solid gray;}
div#_top{padding:2px;background:black;color:yellow;font: bold 11px tahoma;text-align:right;}
div#_bottom{padding:2px;background:black;color:yellow;font: 11px tahoma;text-align:right;}
.desc_text{vertical-align:top;text-align: left;padding: 2px;font: 11px tahoma;border: 1px solid gray;}
</style></head><body>
            <table width="450" border="0" cellspacing="3" cellpadding="3">
			<tr><th colspan="2">Personal Particulars</th></tr>
              <tr>
                <td width="150" class="form_label">Full name :</td>
				<td class="desc_text">'. $fullname .'</td>
              </tr>
              <tr>
                <td class="form_label">Gender :</td>
                <td class="desc_text">'. $gender .'</td>
              </tr>
			  <tr>
			  <td class="form_label">Birthdate :</td>
			  <td class="desc_text">'. $birthDay .'/'. $birthMonth .'/'. $birthYear .'</td>
			  </tr>
              <tr>
                <td class="form_label">'. $c_method .' :</td>
                <td class="desc_text">'. $contact .'</td>
              </tr>
              <tr>
                <td class="form_label">Marital Status :</td>
                <td class="desc_text">'. $status .'</td>
              </tr>
              <tr>
                <td class="form_label">City :</td>
                <td class="desc_text">'. $city .'</td>
              </tr>
              <tr>
                <td class="form_label">Country :</td>
                <td class="desc_text">'. $country .'</td>
              </tr>
			  <tr><th colspan="2">Family</th></tr>
              <tr>
                <td class="form_label" valign="top">Family Background:</td>
                <td class="desc_text">'. $fnotes .'</td>
              </tr>
			  <tr><th colspan="2">Occupation</th></tr>
              <tr>
                <td class="form_label">Company Name :</td>
                <td class="desc_text">'. $company .'</td>
              </tr>
              <tr>
                <td class="form_label">Job title :</td>
                <td class="desc_text">'. $job .'</td>
              </tr>
              <tr>
                <td class="form_label">Working Experience :</td>
                <td class="desc_text">'. $xp .'</td>
              </tr>
              <tr>
                <td class="form_label">Monthly income :</td>
                <td class="desc_text">'. $inc .'</td>
              </tr>
			  <tr><th colspan="2">Recreational</th></tr>
              <tr>
                <td class="form_label" valign="top">Activites :</td>
                <td class="desc_text">'. $rnotes .'</td>
              </tr>
              <tr>
                <td class="form_label">Hobbies :</td>
                <td class="desc_text">'. $hobby .'</td>
              </tr>
			  <tr><th colspan="2">Money</th></tr>
              <tr>
                <td class="form_label" valign="top">Commitments :<br />&amp; liabilities &nbsp; </td>
                <td class="desc_text">'. $liabilities .'</td>
              </tr>
              <tr>
                <td class="form_label" valign="top">Side Incomes :</td>
                <td class="desc_text">'. $sideinc .'</td>
              </tr>
			  <tr>
                <td class="form_label" valign="top">Money :</td>
                <td class="desc_text">'. $mnotes .'</td>
              </tr>
			  <tr><th colspan="2">Health</th></tr>
              <tr>
                <td class="form_label" valign="top">Health &amp; Medical:</td>
                <td class="desc_text">'. $hnotes .'</td>
              </tr>
			  <tr><th colspan="2">Desire/Dreams</th></tr>
              <tr>
                <td class="form_label" valign="top">Dreams :</td>
                <td class="desc_text">'. $dnotes .'</td>
              </tr>
			<tr><th colspan="2">Others</th></tr>
              <tr>
                <td colspan="2" class="desc_text" style="padding-left:5px;" valign="top">
					ip: '. $ip .'<br />
					ref: '. $httpref .'<br />
					date: '. $realdate .'<br />
				</td>
              </tr>
            </table>
</body></html>
';
/*
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
	echo "<h2>Use Back button - Please Enter a valid e-mail address.</h2>\n";
	$badinput = "<h2>Feedback was NOT submitted</h2>\n";
	echo $badinput + $realdate;
}
else{
	$todayis = date("l, F j, Y, g:i a") ;

	$attn = $_POST["attn"] ;
	$subject = $attn;

	$notes = stripcslashes($_POST["notes"]);

	if(empty($firstname) || empty($visitormail) || empty($attn )) {
	echo "<h2>Use Back - Please fill in all fields.</h2>\n";
	}else{

	$message = "$todayis [EST] \n
	Subject: $attn \n
	Message: $notes \n
	From: " . $prefix . " " . $firstname . " " . $lastname . "(" . $visitormail . ")\n
	Company Name: " . $company . "\n
	Country: " . $country . "\n
	Additional Info : \n
	IP: " . $ip . " \n
	Browser Info: " . $httpagent . "\n
	Referral : " . $httpref . " \n
	";

	$from = "From: $visitormail\r\n";

	//mail("diblos@gmail.com", $subject, $message, $from);
	//mail("bakhtiar@gussmanntech.com", $subject, $message, $from);
	$tablevisibility = "visible";
}
*/
//mail("diblos@gmail.com", $subject, $message, $headers);
echo $message;
//header( 'Location: http://www.nakedmaya.com/' ) ;
?>