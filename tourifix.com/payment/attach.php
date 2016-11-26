<?php

require '../inc/db.php';

$id = array_key_exists('id', $_POST) ? $_POST['id'] : '';
$data = array_key_exists('data', $_POST) ? $_POST['data'] : '';

addHeader();

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "REPLACE INTO trfx_applicant_attachment(Applicant_id,Base64Data) VALUES(".$id.",'".$data."');";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
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