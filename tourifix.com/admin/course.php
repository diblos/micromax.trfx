<?php

require '../inc/db.php';

//$o = htmlspecialchars($_POST["o"]);
$o = array_key_exists('o', $_POST) ? $_POST['o'] : '';

addHeader();

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($o===""){
	$sql = "SELECT * FROM trfx_course_details ORDER BY id";
}else{
	$sql = "SELECT * FROM trfx_course_details WHERE id='".$o."'";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$rows = array();
    while($row = $result->fetch_assoc()) {
		if($o===""){	$rows[] = $row;}else{$rows[] = $row;}
    }
	
	echo json_encode($rows);
	
} else {
    echo "0 results";
}
$conn->close();


function addHeader() {
	header("Content-Type:text/plain");
	header("Access-Control-Allow-Origin: *");
	//header("Access-Control-Allow-Methods: GET, POST");	
}

?>