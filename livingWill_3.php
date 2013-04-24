<?php

ini_set('display_errors', 'On');
include 'content.php';

?>

<!doctype html>
<html lang="en">
  <head> 
        <title>Loader</title> 
        <link type="stylesheet" rel="stylesheet" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> 
        <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51748f4d2b87cc72"></script>
        <script type="text/javascript">
			$(document).ready(function() {
			    $("body").css("display", "none");
			 
			    $("body").fadeIn(1000);
			 
			    $("a.transition").click(function(event){
			        event.preventDefault();
			        linkLocation = this.href;
			        $("body").fadeOut(400, redirectPage);      
			    });			    
			   
			});
		</script>
	        
   </head>
		
		<body id="toolkit">
			<header>
			
			<!-- you could set the width of your progress bar based on how 
			far along the user is in the question sequence
			in this case, i'm setting it to the requested page * 10 + 10 %, 
			so page 0 = 10%, page 1 = 20%, page 2 = 30%, etc… -->
			<!-- <div id="progressbar" style="background-color:yellow; width:<?php echo 1 + $page *1; ?>%"><?php include 'header.php';?></div> -->
			<?php include 'header.php';?>
			</header>
			
			<div id="out">
			<?php
				include 'exitButton.php';
			?>

			</div>
			
			<div id="LivingWilllLine"><img src="images/blueLivingWillLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon livingWill" src="images/icons/livingWill.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question">Which of the following do you fear most near the end of life?<h2>
				
				<div id ="choices">	
					<center><a id="ThreeTemplateLeft" class="ThreeAnswer" href="livingWill_4.php">Being in pain</a></center>
					<center><a id="ThreeTemplateRight" class="ThreeAnswer" href="livingWill_4.php">Losing the ability to think</a></center>
					<center><a id="ThreeTemplateMiddle" class="ThreeAnswer" href="livingWill_4.php">Being alone</a></center>		
				</div><!-- closing choices -->
			</div><!-- closing content -->
			
			<aside>
			<form><input id="graveStories" type="text" name="story" placeholder="Share your own story here..."><br></form>
			<img id="livingWill3" src="images/sideBar/datalivingWill_3.png">
		
				<img id ="social" src ="images/socialButtons.png">
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
						
				</div>
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>