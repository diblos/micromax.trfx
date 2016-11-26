<?php
/* PROCESS */

require '../inc/db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$o = array_key_exists('o', $_POST) ? $_POST['o'] : '';
$fname = array_key_exists('fname', $_POST) ? $_POST['fname'] : '';
$lname = array_key_exists('lname', $_POST) ? $_POST['lname'] : '';
$idno = array_key_exists('passport', $_POST) ? $_POST['passport'] : '';
$email = array_key_exists('email', $_POST) ? $_POST['email'] : '';
$age = array_key_exists('age', $_POST) ? $_POST['age'] : 0;
$nationality = array_key_exists('nationality', $_POST) ? $_POST['nationality'] : '';
$occupation = array_key_exists('occupation', $_POST) ? $_POST['occupation'] : '';
$add1 = array_key_exists('add1', $_POST) ? $_POST['add1'] : '';
$add2 = array_key_exists('add2', $_POST) ? $_POST['add2'] : '';
$zip = array_key_exists('zip', $_POST) ? $_POST['zip'] : '';
$city = array_key_exists('city', $_POST) ? $_POST['city'] : '';
$state = array_key_exists('state', $_POST) ? $_POST['state'] : '';
$mobile = array_key_exists('mobile', $_POST) ? $_POST['mobile'] : '';
$country = array_key_exists('country', $_POST) ? $_POST['country'] : '';
$eng_proficiency = array_key_exists('eng_proficiency', $_POST) ? $_POST['eng_proficiency'] : '';
$edu_level = array_key_exists('edu_level', $_POST) ? $_POST['edu_level'] : '';
$prefered_course = array_key_exists('prefered_course', $_POST) ? $_POST['prefered_course'] : '';
$join_date = array_key_exists('join_date', $_POST) ? $_POST['join_date'] : date("Y-m-d");
$gender = array_key_exists('gender', $_POST) ? $_POST['gender'] : '';
$approved = array_key_exists('approved', $_POST) ? $_POST['approved'] : '';
$applicant_id = array_key_exists('applicant_id', $_POST) ? $_POST['applicant_id'] : '';
$fee = array_key_exists('fee', $_POST) ? $_POST['fee'] : '';

addHeader();

//Deprecated: mysql_real_escape_string();

if ($o==="new"){

// $sql = "INSERT INTO trfx_applicant (fname, lname, email) VALUES ('".mysql_real_escape_string($fname)."', '".mysql_real_escape_string($lname)."', '".mysql_real_escape_string($email)."')";
$sql = "INSERT INTO trfx_applicant (fname, lname, email) VALUES ('".$fname."', '".$lname."', '".$email."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	$lastid = $conn->insert_id;
	// $sql = "INSERT INTO trfx_applicant_details (applicant_id,age,nationality,occupation,add1,add2,zip,city,state,mobile,country,eng_proficiency,edu_level,prefered_course,join_date,gender,approved) VALUES ('".mysql_real_escape_string($lastid)."',".mysql_real_escape_string($age).",'".mysql_real_escape_string($nationality)."','".mysql_real_escape_string($occupation)."','".mysql_real_escape_string($add1)."','".mysql_real_escape_string($add2)."','".mysql_real_escape_string($zip)."','".mysql_real_escape_string($city)."','".mysql_real_escape_string($state)."','".mysql_real_escape_string($mobile)."','".mysql_real_escape_string($country)."','".mysql_real_escape_string($eng_proficiency)."','".mysql_real_escape_string($edu_level)."','".mysql_real_escape_string($prefered_course)."','".mysql_real_escape_string($join_date)."','".mysql_real_escape_string($gender)."','N')";
	$sql = "INSERT INTO trfx_applicant_details (applicant_id,idno,age,nationality,occupation,add1,add2,zip,city,state,mobile,country,eng_proficiency,edu_level,prefered_course,join_date,gender,approved,fee) VALUES ('".$lastid."','".$idno."',".$age.",'".$nationality."','".$occupation."','".$add1."','".$add2."','".$zip."','".$city."','".$state."','".$mobile."','".$country."','".$eng_proficiency."','".$edu_level."','".$prefered_course."','".$join_date."','".$gender."','N',".$fee.")";
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}else{
//approved
$sql = "UPDATE trfx_applicant_details SET approved='".$approved."' WHERE applicant_id='".$applicant_id."'";

if ($conn->query($sql) === TRUE) {

		echo "Approval status updated successfully";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	
}


function addHeader() {
	header("Content-Type:text/plain");
	header("Access-Control-Allow-Origin: *");
	//header("Access-Control-Allow-Methods: GET, POST");	
}

$conn->close();
?>