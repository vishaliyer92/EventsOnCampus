<?php
if(!isset($_SESSION)){
    session_start();
}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "eoc";
	$con = mysqli_connect($servername, $username, $password, $dbname);
	$emailid = strval($_POST['emailid']);
	$pswrd = strval($_POST['pswrd']);
	$cnfpswrd = strval($_POST['cnfpswrd']);
	
	if(!($pswrd === $cnfpswrd))
	{
		die("Both Passwords don't match");
	}
	
	$user = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM users WHERE emailid = '".$emailid."'"));

	if($user == 0)
	{
		echo $user;
		die("The user doesn't exist ! Try making one today ! <br /><a href='loginter.php'>Sign Up</a>");
	}
	
	else{
		$update_Query = "update users set password = '".$pswrd."' where emailid = '".$emailid."'";
		mysqli_query($con,$update_Query);
		echo "Password has been reset. <br /><a href='UserLogin.html'>Sign In</a>";
	}
	mysqli_close($con);
?>