<?php


$con = mysqli_connect("localhost","root","","eoc");

$event_id = "";
$eventname = @$_POST['eventname'];
$category = @$_POST['category'];
$location = @$_POST['location']; 
$desc = @$_POST['desc'];
$fromtime = @$_POST['frotime'];
$totime = @$_POST['totime'];




			$insert_query = "INSERT INTO events (eventid, name, category, location, description, frotime, totime) VALUES ('$event_id', '$eventname', '$category', '$location', '$desc', '$fromtime', '$totime' )";
			mysqli_query($con,$insert_query);
			
			header ("Location:settings.php");


?>
    