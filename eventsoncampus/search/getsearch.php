<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eoc";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


						$find = $_GET['finded'];

						$sql = "SELECT * FROM events where category like '%$find%'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
	$i=0;
    while($row = $result->fetch_assoc())
						{
							$jsonresult[$i++]['name'] = $row['name'];
							$jsonresult[$i++]['category'] = $row['category'];
							$jsonresult[$i++]['description'] = $row['description'];
							$jsonresult[$i++]['location'] = $row['location'];
							$jsonresult[$i++]['frotime'] = $row['frotime'];
							$jsonresult[$i++]['totime'] = $row['totime'];

							
													
						} }
						
						$json_response = json_encode($jsonresult);
				
						?>