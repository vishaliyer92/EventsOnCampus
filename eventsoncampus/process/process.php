<?php
echo 'brahhh';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eoc";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo 'brahhh'; 


	$id = $_GET['emailid'];
	$data = $_GET['value'];
	echo $data;
	//if(mysql_query("update users set value='$data' where emailid='$id'"))
	$sql = "UPDATE users SET value='$data' where emailid='$id'";
	if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";

	
	//echo 'success';
	}
?>