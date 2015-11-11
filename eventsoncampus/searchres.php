<!DOCTYPE html>
<html lang="en">

<!--	
    <?php
if(!isset($_SESSION))
{
    session_start();
	
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eoc";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?> 
-->
    
    <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Events On Campus - Homepage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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

include 'connect.php';
error_reporting(0);
?>

<style type="text/css">

body{
	background:url(images/gabround.jpeg) repeat center center fixed;
}

</style>

<nav role="navigation" class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    
    <div class="navbar-brand">
    
    <a href="index.php" class="glyphicon glyphicon-home" style="color:#9CC; font-size:30px; text-decoration:none"></a>
    
    </div>

      
      <div class="col-sm-3 col-md-3" style="text-align:center; display:inline-block">
            <form class="navbar-nav" role="search" action="searchres.php" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="searchevents">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div> 
      
      
      
      
       <?php
   if($_SESSION['usertype'] == 1 || $_SESSION['usertype'] == 2)
   {
   ?>
      
      &nbsp; &nbsp; <a href="settings.php?val=1" class="glyphicon glyphicon-cog" style="color:#9CC; font-size:30px; text-decoration:none; display:inline-block;float:left"></a> 
      <?php }?>
      
      <!-- Login / Register / User -->
      <div class="nav navbar-nav navbar-right" style="float:right" >
      
      <?php
    session_start();
    if(!isset($_SESSION["global_user_name"]))
    {
?>
<button class="btn btn-primary custom-button" style="background-color:#9CC; font-size:17px; color:#030; font-family:Lobster" onclick="window.location.href='loginter.php'">Login / Register</button>

<?php
	}
	else
	{
?>

      
      
      <p style="color:#9CC; font-family:Lobster; font-size:20px">Welcome <?php echo $_SESSION["global_user_name"] ?>
     
      
      &nbsp; &nbsp;<a href="logout.php" class="glyphicon glyphicon-log-out" style="color:#9CC; font-size:30px; text-decoration:none; display:inline-block; float:right"></a>
      </p>
      
      <?php
	}
	?>
     
      
      </div>
	  <!-- END Login / Register / User -->   
  
    <!-- /.container -->
    
  
    </nav><!-- /.navbar -->
    
    
    <div class="container">

    <br/><br>
      <div class="jumbotron" style="background-color:transparent">
        
<!-- <center>          <h1 style="font-family:Lobster; font-size:900; color:#030">Dashboard</h1> </center> -->
          </div>      
</div>


    <div class="container">    
		
                <div class="row">
                    <table border="bold" style="box-shadow:#888888">
                        <thead>
                            <tr>

                                <th colspan="1" rowspan="1" style="width: 180px;" tabindex="0"><div style="font-family:Lobster; font-size:38px; font-weight:lighter; text-align:center">Name</div></th>

                                <th colspan="1" rowspan="1" style="width: 220px;" tabindex="0"><div style="font-family:Lobster; font-size:38px; font-weight:lighter; text-align:center">Category</div></th>

                                <th colspan="1" rowspan="1" style="width: 288px;" tabindex="0"><div style="font-family:Lobster; font-size:38px; font-weight:lighter; text-align:center">Description</div></th>
                                <th colspan="1" rowspan="1" style="width: 288px;" tabindex="0"><div style="font-family:Lobster; font-size:38px; font-weight:lighter; text-align:center">Location</div></th>
                                <th colspan="1" rowspan="1" style="width: 288px;" tabindex="0"><div style="font-family:Lobster; font-size:38px; font-weight:lighter; text-align:center">From</div></th>
                                <th colspan="1" rowspan="1" style="width: 288px;" tabindex="0"><div style="font-family:Lobster; font-size:38px; font-weight:lighter; text-align:center">To</div></th>
                            </tr>
                        </thead>

                        <tbody>
                        
						
						<?php
						$find = $_POST['searchevents'];

						$sql = "SELECT * FROM events where category like '%$find%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
						{
//							if($i%2==0) $class = 'even'; else $class = 'odd';
							
							echo'<tr>

                                <td style="text-align:center">'.$row['name'].'</td>
								<td style="text-align:center">'.$row['category'].'</td>
                                <td style="text-align:center">'.$row['description'].'</td>
								<td style="text-align:center">'.$row['location'].'</td>
                                <td style="text-align:center">'.$row['frotime'].'</td>
								<td style="text-align:center">'.$row['totime'].'</td>
                            </tr>';							
						} }
						?>
                        </tbody>
                    </table>
        </div>
	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../eventsoncampus/js/bootstrap.min.js"></script>
        <script src="../eventsoncampus/js/bootstrap-editable.js" type="text/javascript"></script> 
        
        
        
       

         <script type="text/javascript">

	
		function searchbutton(finded)
		{
				//var id = $(this).parent().parent().attr('id');
				//var data = 'eve=' + id ;
				//var parent = $(this).parent().parent();

			$.ajax(
				{
					   url: "http://localhost/searchservice/getsearch.php?finded="+finded,
				type: 'GET',
					
					   success: function()
					   {
							location.href="searchres.php";
					   }
				 });					
			}
		
		// style the table with alternate colors
		// sets specified color for every odd row
		//$('table#delTable tr:odd').css('background',' #FFFFFF');
	
	
</script>
        
        
<!-- <script type="text/javascript">
jQuery(document).ready(function() {  
        $.fn.editable.defaults.mode = 'popup';
        $('.xedit').editable();		
		$(document).on('click','.editable-submit',function(){
			var x = $(this).closest('td').children('span').attr('id');
			var y = $('.input-sm').val();
			var z = $(this).closest('td').children('span');
			//header ("process.php?emailid="+x+"&value="+y);
			$.ajax({
				url: "process.php?emailid="+x+"&value="+y,
				type: 'GET',
				success: function(s){
					if(s == 'status'){
					$(z).html(y);}
					if(s == 'error') {
					alert('Error Processing your Request!');}
				},
				error: function(e){
					alert('Error Processing your Request!!');
				}
			});
		});
});
</script>  -->
    </div>
</body>
</html>