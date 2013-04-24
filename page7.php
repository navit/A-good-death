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
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "6c3db8a7-f747-45d2-b332-e712f41865d9", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        <script type="text/javascript">
			$(document).ready(function() {
			    $("body").css("display", "none");
			 
			    $("body").fadeIn(1000);
			 
			    $("a.transition").click(function(event){
			        event.preventDefault();
			        linkLocation = this.href;
			        $("body").fadeOut(400, redirectPage);      
			    });
			    
			    $('.hover').click(function(){
			    	$('#hoverMessage').fadeIn();  
			    });
			    $('.hover').mouseleave(function(){
				    $('#hoverMessage').fadeOut();
			    });
			   
			});
			
		</script>
	        
   </head>
		
		<body id="toolkit">
			<header>
				<?php include 'header.php';?>
			</header>
			
			<div id="out">
			<?php
				include 'exitButton.php';
			?>

			</div>
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" src="images/icons/icon7.png">
				<h1 class="title">END-OF-LIFE TALKS</h1>
				<h2 class= "question">Do you trust this person to handle conflicting opinions between family members, friends, and medical personnel?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page8.php">YES</a></center>
					<center><a id="TemplateRight" class="answer hover" href="#">NO</a></center>
					<div id= "hoverMessage"><img src= "images/hoverMessage.png"> <p>YOU NEED TO THINK  <br>OF ANOTHER PERSON!</p> </div>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<form><input id="personalStories" type="text" name="story" placeholder="Share your own story here..."><br></form>
			<img src="images/sideBar/data7.png">
			<span class='st_facebook_large' displayText='Facebook'></span>
			<span class='st_twitter_large' displayText='Tweet'></span>
			<span class='st_email_large' displayText='Email'></span>
		
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>