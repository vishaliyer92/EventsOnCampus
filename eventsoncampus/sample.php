<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
//include 'connect.php';
$con = mysqli_connect("localhost","root","","eoc");

$sql = mysqli_fetch_array(mysqli_query($con,"select name from users where emailid='vxv140330@utdallas.edu'"));

echo $sql['name'];
?>


</body>
</html>