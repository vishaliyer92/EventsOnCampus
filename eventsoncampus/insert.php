<html>
<body>


<?php


$con = mysqli_connect("localhost","root","","eoc");

$name = $_POST['name'];
$emailid = $_POST['emailid'];
$pswrd = $_POST['pswrd']; 
$value = "0";
//checking for email 
$result = mysqli_query($con,"SELECT * FROM users WHERE emailid='".$emailid."'"); 
$data = mysqli_num_rows($result);

if(($data)==0)
		{
			$insert_query = "INSERT INTO users (name, emailid, password, value) VALUES ('$name', '$emailid', '$pswrd', '$value' )";
			mysqli_query($con,$insert_query);
			header('Location: blankspace.php');
			
			
					
			
			//$response_array['success'] = true;
			//$response_array['message'] = 'Success!';
			
			
		}
		
else
{
	
	header('Location: blankspacenot.php');
	//$response_array['success'] = false;
	//$response_array['message'] = 'Failure!';
}

//echo json_encode($response_array);

?>
    
</body>
</html>