<?php


$conn = mysqli_connect("localhost","root","","eoc");

$event_id = "";
$eventname = @$_POST['eventname'];
$category = @$_POST['category'];
$location = @$_POST['location']; 
$desc = @$_POST['desc'];
$fromtime = @$_POST['frotime'];
$totime = @$_POST['totime'];
$etags = @$_POST['tags'];




			$insert_query = "INSERT INTO events (eventid, name, category, location, description, frotime, totime) VALUES ('$event_id', '$eventname', '$category', '$location', '$desc', '$fromtime', '$totime' )";
			mysqli_query($con,$insert_query);
			
			

			$sql = "SELECT * FROM `events` WHERE `name` = '$eventname' AND `description` = '$desc'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	//echo "hi";
        $event_id = $row["eventid"];
    }
}
$tags = explode(",",$etags);
foreach ($tags as $i => $value) {
$sql = "INSERT INTO `eoc`.`event_tags` (`event_id`, `tags`) VALUES ('$event_id', '$tags[$i]');";
header ("Location:settings.php");
	
}
$conn->close();			

?>
    