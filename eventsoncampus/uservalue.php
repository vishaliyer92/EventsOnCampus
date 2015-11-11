<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "eoc";
	$con = mysqli_connect($servername, $username, $password, $dbname);

$user = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM users WHERE value = '1'"));
$uservalue = $user['value'];
$GLOBALS['userval'] = $uservalue;

?>