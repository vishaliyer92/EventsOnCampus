<!DOCTYPE html>
<html lang="en">

<!--	
    <?php
if(!isset($_SESSION))
{
    session_start();
	
}
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
            <form class="navbar-nav" role="search" action="searchres.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="searchevents">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div> 
      
      
      
      

      
      &nbsp; &nbsp; <a href="settings.php" class="glyphicon glyphicon-cog" style="color:#9CC; font-size:30px; text-decoration:none; display:inline-block;float:left"></a> 
     
      
      <!-- Login / Register / User -->
      <div class="nav navbar-nav navbar-right" style="float:right" >
      
 		<p style="color:#9CC; font-family:Lobster; font-size:20px">Welcome <?php echo $_SESSION["global_user_name"] ?>
     
      
      &nbsp; &nbsp;<a href="logout.php" class="glyphicon glyphicon-log-out" style="color:#9CC; font-size:30px; text-decoration:none; display:inline-block; float:right"></a>
      </p>
      

      
      </div>
	  <!-- END Login / Register / User -->   
  
    <!-- /.container -->
    
  
    </nav><!-- /.navbar -->
  
<!-- HEADER 
=================================-->
<div class="container">

    <br/><br>
      <div class="jumbotron" style="background-color:transparent">
        
<center>          <h1 style="font-family:Lobster; font-size:900; color:#030">Dashboard</h1> </center> 
          </div>      
</div>
<!-- /header container-->

<!-- CONTENT
=================================-->
<div class="container">

<center>
<?php 
//$value = $_GET['val'];
if(!isset($_SESSION))
{
    session_start();
	
}
if($_SESSION['usertype'] == 1)
{
	?>
<button class="btn btn-primary custom-button" style="background-color:#9CC; font-size:17px; color:#030; font-family:Lobster" onclick="window.location.href='userprivilz.php'">User Privileges</button> <?php } ?>
&nbsp; &nbsp;
<button class="btn btn-primary custom-button" style="background-color:#9CC; font-size:17px; color:#030; font-family:Lobster" onclick="window.location.href='addevent.php'">Add Event</button>
&nbsp; &nbsp;
<?php
if($_SESSION['usertype'] == 1)
{
	?>
<button class="btn btn-primary custom-button" style="background-color:#9CC; font-size:17px; color:#030; font-family:Lobster" onclick="window.location.href='deleteevent.php'">Remove Event</button> <?php } ?>


</center>

  
    <hr>
	</div>
  	
  	
</div>

<!-- /CONTENT ============-->
<!-- FOOTER -->
<footer style="text-align:center"><small>Footer</small>
</footer>


	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../eventsoncampus/js/bootstrap.min.js"></script>
	</body>
</html>