<?php

require '../inc/db.php';

$o = array_key_exists('o', $_POST) ? $_POST['o'] : '';
$direct = array_key_exists('direct', $_POST) ? $_POST['direct'] : 'yes';

addHeader();

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($direct==='no'){
	$sql = "SELECT a.*,b.* FROM trfx_applicant a LEFT JOIN trfx_applicant_details b ON a.id=b.applicant_id WHERE a.email='".$o."' or b.idno='".$o."' limit 1";
}else{
	$sql = "SELECT a.*,b.* FROM trfx_applicant a LEFT JOIN trfx_applicant_details b ON a.id=b.applicant_id WHERE a.id='".$o."'";
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