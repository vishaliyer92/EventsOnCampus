<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Events On Campus - Users</title>
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
    
      <!-- Search Bar -->
      <div class="col-sm-3 col-md-3" style="text-align:center">
            <form class="navbar-nav" role="search" action="searchres.php">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>		<!-- // Search Bar -->
        </div> 
      
      <div class="nav navbar-nav navbar-right" style="float:right" ><button class="btn btn-primary custom-button" style="background-color:#9CC; font-family:Lobster; font-size:17px; color:#030" onclick="window.location.href='loginter.php'">login / register</button></div
   
   
  
    
    ></div><!-- /.container -->
    </nav><!-- /.navbar -->
  
<!-- HEADER 
=================================-->
<div class="container">

    <br/><br>
      <div class="jumbotron" style="background-color:transparent">
        
<center>          <h1 style="font-family:Lobster; font-size:900; color:brown">Welcome!</h1> </center> 
          </div>      
</div>
<!-- /header container-->

<!-- CONTENT
=================================-->
<div class="container">


<div style="width:100%"> <!--header-->

<div style="float:left; width:50%; text-align:center"> <!--left column-->
<center>
<form class="form-horizontal" action="http://localhost/loginservice/login.php" method="post">
        <h3 style="font-family:Lobster">Sign In</h3>
        <div class="form-group">
            <div class="col-xs-12">
                <input type="text" class="form-control" name="emailid" placeholder="Email ID" style="max-width:200px;" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <input type="password" class="form-control" name="pswrd" placeholder="Password" style="max-width:200px;" required>
            </div>
        </div>
        <div class="form-group">
        
                <button type="submit" class="btn btn-primary" style="background:brown;">Login</button>
           		
        </div>
                

</form></center>
</div> <!--Left Column End -->


<div style="float:right; width:50%; text-align:center"><!--right column-->
<center>
<h3 style="font-family:Lobster">Sign Up</h3>

<form class="form-horizontal" action="insert.php" method="post">

<div class="form-group">
<div class="col-xs-12">
<input type="text" class="form-control" name="name" placeholder="Name" style="max-width:200px;" required>
</div>
</div>

<div class="form-group">
<div class="col-xs-12">
<input type="text" class="form-control" name="emailid" placeholder="@utdallas.edu" style="max-width:200px;" required>
</div>
</div>

<div class="form-group">
<div class="col-xs-12">
<input type="password" class="form-control" name="pswrd" placeholder="Password (6-10 characters)" style="max-width:200px;" required>
</div>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary" name="submit" style="background:brown;">Sign Up</button>
</div>

</form>
</center>
</div>  <!-- Right Column End -->

</div> <!-- Header End -->
   <br><br><br>
    
    <hr width="1" size="500">
    
	</div>
  	



<!-- /CONTENT ============-->
<!-- FOOTER -->
<footer style="text-align:center"><small>Footer</small>
</footer>


	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../grid-2/js/bootstrap.min.js"></script>
	</body>
</html>