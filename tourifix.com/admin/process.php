<?php

require '../inc/db.php';

$id = array_key_exists('id', $_POST) ? $_POST['id'] : '';
$fee_1 = array_key_exists('fee_1', $_POST) ? $_POST['fee_1'] : 0.00;
$fee_2 = array_key_exists('fee_2', $_POST) ? $_POST['fee_2'] : 0.00;
$fee_3 = array_key_exists('fee_3', $_POST) ? $_POST['fee_3'] : 0.00;
$fee_4 = array_key_exists('fee_4', $_POST) ? $_POST['fee_4'] : 0.00;
$fee_5 = array_key_exists('fee_5', $_POST) ? $_POST['fee_5'] : 0.00;
$fee_6 = array_key_exists('fee_6', $_POST) ? $_POST['fee_6'] : 0.00;
$fee_7 = array_key_exists('fee_7', $_POST) ? $_POST['fee_7'] : 0.00;
$fee_8 = array_key_exists('fee_8', $_POST) ? $_POST['fee_8'] : 0.00;
$fee_9 = array_key_exists('fee_9', $_POST) ? $_POST['fee_9'] : 0.00;
$fee_10 = array_key_exists('fee_10', $_POST) ? $_POST['fee_10'] : 0.00;
$fee_11 = array_key_exists('fee_11', $_POST) ? $_POST['fee_11'] : 0.00;
$fee_12 = array_key_exists('fee_12', $_POST) ? $_POST['fee_12'] : 0.00;

addHeader();

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "REPLACE INTO trfx_course_details(id,fee_1,fee_2,fee_3,fee_4,fee_5,fee_6,fee_7,fee_8,fee_9,fee_10,fee_11,fee_12) VALUES(".$id.",".$fee_1.",".$fee_2.",".$fee_3.",".$fee_4.",".$fee_5.",".$fee_6.",".$fee_7.",".$fee_8.",".$fee_9.",".$fee_10.",".$fee_11.",".$fee_12.");";
$sql = "UPDATE trfx_course_details SET fee_1=".$fee_1.",fee_2=".$fee_2.",fee_3=".$fee_3.",fee_4=".$fee_4.",fee_5=".$fee_5.",fee_6=".$fee_6.",fee_7=".$fee_7.",fee_8=".$fee_8.",fee_9=".$fee_9.",fee_10=".$fee_10.",fee_11=".$fee_11.",fee_12=".$fee_12." WHERE id=".$id.";";

	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}	

$conn->close();


function addHeader() {
	header("Content-Type:text/plain");
	header("Access-Control-Allow-Origin: *");
	//header("Access-Control-Allow-Methods: GET, POST");	
}

?>