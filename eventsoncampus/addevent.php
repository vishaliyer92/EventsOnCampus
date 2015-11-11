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



<link href="../eventsoncampus/css/jquery.tagit.css" rel="stylesheet" type="text/css">
<link href="../eventsoncampus/css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">
<script src="../eventsoncampus/js/jquery-2.1.3.js" type="text/javascript" charset="utf-8"></script>
<script src="../eventsoncampus/js/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../eventsoncampus/js/tag-it.js" type="text/javascript" charset="utf-8"></script>
	
	<script>
$(function(){
            var sampleTags = ['c++', 'java', 'php', 'coldfusion', 'javascript', 'asp', 'ruby', 'python', 'c', 'scala', 'groovy', 'haskell', 'perl', 'erlang', 'apl', 'cobol', 'go', 'lua'];

            //-------------------------------
            // Minimal
            //-------------------------------
            $('#myTags').tagit();

            //-------------------------------
            // Single field
            //-------------------------------
            $('#singleFieldTags').tagit({
                availableTags: sampleTags,
                // This will make Tag-it submit a single form value, as a comma-delimited field.
                singleField: true,
                singleFieldNode: $('#mySingleField')
            });

            // singleFieldTags2 is an INPUT element, rather than a UL as in the other 
            // examples, so it automatically defaults to singleField.
            $('#singleFieldTags2').tagit({
                availableTags: sampleTags
            });

            //-------------------------------
            // Preloading data in markup
            //-------------------------------
            $('#myULTags').tagit({
                availableTags: sampleTags, // this param is of course optional. it's for autocomplete.
                // configure the name of the input field (will be submitted with form), default: item[tags]
                itemName: 'item',
                fieldName: 'tags'
            });

            //-------------------------------
            // Tag events
            //-------------------------------
            var eventTags = $('#eventTags');

            var addEvent = function(text) {
                $('#events_container').append(text + '<br>');
            };

            eventTags.tagit({
                availableTags: sampleTags,
                beforeTagAdded: function(evt, ui) {
                    if (!ui.duringInitialization) {
                        addEvent('beforeTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
                    }
                },
                afterTagAdded: function(evt, ui) {
                    if (!ui.duringInitialization) {
                        addEvent('afterTagAdded: ' + eventTags.tagit('tagLabel', ui.tag));
                    }
                },
                beforeTagRemoved: function(evt, ui) {
                    addEvent('beforeTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                afterTagRemoved: function(evt, ui) {
                    addEvent('afterTagRemoved: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                onTagClicked: function(evt, ui) {
                    addEvent('onTagClicked: ' + eventTags.tagit('tagLabel', ui.tag));
                },
                onTagExists: function(evt, ui) {
                    addEvent('onTagExists: ' + eventTags.tagit('tagLabel', ui.existingTag));
                }
            });

            //-------------------------------
            // Read-only
            //-------------------------------
            $('#readOnlyTags').tagit({
                readOnly: true
            });

            //-------------------------------
            // Tag-it methods
            //-------------------------------
            $('#methodTags').tagit({
                availableTags: sampleTags
            });

            //-------------------------------
            // Allow spaces without quotes.
            //-------------------------------
            $('#allowSpacesTags').tagit({
                availableTags: sampleTags,
                allowSpaces: true
            });

            //-------------------------------
            // Remove confirmation
            //-------------------------------
            $('#removeConfirmationTags').tagit({
                availableTags: sampleTags,
                removeConfirmation: true
            });
            
        });
</script>
	
	
	
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
      
      
      
      

      
      <a href="settings.php" class="glyphicon glyphicon-cog" style="color:#9CC; font-size:30px; text-decoration:none; display:inline-block;float:left"></a> 
     
      
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
        
          <h2 style="font-family:Lobster; color:#030; text-align:left">Add Event</h2>
          </div>      
</div>
<!-- /header container-->

<!-- CONTENT
=================================-->
<div class="container">

<center>

<form class="form-horizontal" action="addeve.php" method="post">

<div class="form-group">
<input type="text" class="form-control" name="eventname" placeholder="Event Name" style="max-width:300px;" required>
</div>

<div class="form-group">
<input type="text" class="form-control" name="category" placeholder="Category" style="max-width:300px;" required>
</div>

<div class="form-group">
<input type="text" class="form-control" name="location" placeholder="Location" style="max-width:300px;" required>
</div>

<div class="form-group">
<input type="text" class="form-control" name="desc" placeholder="Description" style="max-width:300px;" required>
</div>

<div class="form-group">
<input type="time" class="form-control" name="frotime" placeholder="Start Time (YYYY/MM/DD HH:MM:SS)" style="max-width:300px;" required>
</div>

<div class="form-group">
<input type="time" class="form-control" name="totime" placeholder="End Time (YYYY/MM/DD HH:MM:SS)" style="max-width:300px;" required>
</div>


<input   id="mySingleField" name="tags" style="display:none" >
<ul id="singleFieldTags"></ul>


<div class="form-group">
<button type="submit" class="btn btn-primary" name="submit" style="background:brown;">Add</button>
</div>

</form>

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