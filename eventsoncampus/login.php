<hmtl>
<head>
<link href="../eventsoncampus/css/bootstrap.min.css" rel="stylesheet">
		
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
       
       <!-- Ref Link for Glyphicons -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
       <!-- ======= -->
        <link href="../eventsoncampus/css/styles.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
	
	if(!isset($_SESSION)){
    session_start();
}
	//error_reporting(0);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "eoc";
	$con = mysqli_connect($servername, $username, $password, $dbname);
	$emailid = strval($_POST['emailid']);
	$pswrd = strval($_POST['pswrd']);
	$user = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM users WHERE emailid = '".$emailid."' and password = '".$pswrd."'"));
	if($user == 0)
	{
		
		
		header('Location: blankloginnot.php');
	}
	else
	{
	//test 
	//mysqli_close($con);
	$name = $user['name'];
	//$userid = $user['emailid'];
	
	$usertype = $user['value'];

	
	$_SESSION["global_user_name"] = $name;
	//$_SESSION["global_user_id"] = $userid;
	$_SESSION["usertype"] = $usertype;
	$t = $usertype;
	$r=session_id();
	$expiry = time()+60*60*24;
	setcookie( 'sessionid', '$r', '$expiry', '/' );
	setcookie( 'sessiontype', '$t', '$expiry', '/' );
	
//	 echo "<script type='text/javascript'>alert('login successfully!')</script>";
	header ("Location:http://localhost/eventsoncampus/index.php");
	}
	?>
	
	

</body>
</html>