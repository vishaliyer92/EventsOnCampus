

<?php
if(!isset($_SESSION)){
    session_start();
}
session_unset(); 
session_destroy();

//deleting cart table
$con= mysqli_connect("localhost","root","","eoc");



header ("Location:index.php");

//echo 'You have been logged out. <a href="index.html">Go Back</a>';
exit();
?>

