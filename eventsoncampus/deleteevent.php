<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
//include("connect.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eoc";


$conn = new mysqli($servername, $username, $password, $dbname);

if(!isset($_SESSION))
{
    session_start();
	
}

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JQuery - Delete Table Rows Demo</title>
<style type="text/css">
	a
	{
		color:#FF0000;
	}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function()
	{
		$('table#delTable td a.delete').click(function()
		{
			if (confirm("Are you sure you want to delete this row?"))
			{
				var id = $(this).parent().parent().attr('id');
				var data = 'eventid=' + id ;
				var parent = $(this).parent().parent();

			$.ajax(
				{
					   url: "http://localhost/delservice/delete_row.php?eventid="+id,
				type: 'GET',
					
					   success: function()
					   {
							parent.fadeOut('slow', function() {$(this).remove();});
					   }
				 });					
			}
		});
		
		// style the table with alternate colors
		// sets specified color for every odd row
		$('table#delTable tr:odd').css('background',' #FFFFFF');
	});
	
</script>

<link href="../eventsoncampus/css/bootstrap.min.css" rel="stylesheet">
		
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
       
       <!-- Ref Link for Glyphicons -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
       <!-- ======= -->
        <link href="../eventsoncampus/css/styles.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      
      
      
   
    <link href="../eventsoncampus/css/custom.css" rel="stylesheet" type="text/css">


</head>

<body>

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

       <div class="col-sm-3 col-md-3" style="text-align:center;">
            <form class="navbar-nav" role="search" action="searchres.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="searchevents">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div> 
      <div class="col-sm-3 col-md-3" style="text-align:center; display:inline-block">
          <a href="settings.php" class="glyphicon glyphicon-cog" style="color:#9CC; font-size:30px; text-decoration:none; display:inline-block;float:left"></a>  
        </div> 
      
      
      
      

      
      &nbsp; &nbsp; 
     
      
      <!-- Login / Register / User -->
      <div class="nav navbar-nav navbar-right" style="float:right" >
      
 		<p style="color:#9CC; font-family:Lobster; font-size:20px">Welcome <?php echo $_SESSION["global_user_name"] ?>
     
      
      &nbsp; &nbsp;<a href="logout.php" class="glyphicon glyphicon-log-out" style="color:#9CC; font-size:30px; text-decoration:none; display:inline-block; float:right"></a>
      </p>
      

      
      </div>
	  <!-- END Login / Register / User -->   
  
    <!-- /.container -->
    
  
    </nav><!-- /.navbar -->
    
    
    <div class="container">

    <br/><br>
      <div class="jumbotron" style="background-color:transparent">
        
<center>          <h1 style="font-family:Lobster; font-size:900; color:#030">Delete Events</h1> </center> 
          </div>      
</div>

<div class="container">    
		
                <div class="row">
                    <table id="delTable" class= "table table-striped table-bordered table-hover" >
                       
<thead>
                            <tr>

                                <th colspan="1" rowspan="1" style="width: 180px;" tabindex="0">Event ID</th>

                                <th colspan="1" rowspan="1" style="width: 220px;" tabindex="0">Name</th>
								
                                <th colspan="1" rowspan="1" style="width: 220px;" tabindex="0">Delete</th>
                            </tr>                        </thead>


                        <tbody>
			
		 <?php
						$sql = "SELECT * FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
						{
//							
							
							echo'<tr id="'.$row['eventid'].'">

                                <td>'.$row['eventid'].'</td>
                  <td>'.$row['name'].'</td>
				<td align="center"><a href="#" class="delete" style="color:#FF0000;"><img border="0" src="../eventsoncampus/img/delete.png" /></a></td>
                               
                            </tr>';							
						} }
						?>
                        </tbody>
                    </table>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../eventsoncampus/js/bootstrap.min.js"></script>
        <script src="../eventsoncampus/js/bootstrap-editable.js" type="text/javascript"></script> 
        
        </div>


</body>
</html>
