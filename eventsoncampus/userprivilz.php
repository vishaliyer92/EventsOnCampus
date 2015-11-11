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
<!DOCTYPE html>
<html>
<head>
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
    
    
    <div class="container">

    <br/><br>
      <div class="jumbotron" style="background-color:transparent">
        
<center>          <h1 style="font-family:Lobster; font-size:900; color:#030">Dashboard</h1> </center> 
          </div>      
</div>


    <div class="container">    
		
                <div class="row">
                    <table class= "table table-striped table-bordered table-hover" >
                        <thead>
                            <tr>

                                <th colspan="1" rowspan="1" style="width: 180px;" tabindex="0">Value</th>

                                <th colspan="1" rowspan="1" style="width: 220px;" tabindex="0">Name</th>

                                <th colspan="1" rowspan="1" style="width: 288px;" tabindex="0">Email ID</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
						$sql = "SELECT * FROM users where value = 0 or value = 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
						{
//							if($i%2==0) $class = 'even'; else $class = 'odd';
							
							echo'<tr>

                                <td><span class= "xedit" id="'.$row['emailid'].'">'.$row['value'].'</span></td>

                                <td>'.$row['name'].'</td>

                                <td>'.$row['emailid'].'</td>
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
jQuery(document).ready(function() {  
        $.fn.editable.defaults.mode = 'popup';
        $('.xedit').editable();		
		$(document).on('click','.editable-submit',function(){
			var x = $(this).closest('td').children('span').attr('id');
			var y = $('.input-sm').val();
			var z = $(this).closest('td').children('span');
			//header ("process.php?emailid="+x+"&value="+y);
			$.ajax({
				url: "http://localhost/privservice/process.php?emailid="+x+"&value="+y,
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
</script>
    </div>
</body>
</html>