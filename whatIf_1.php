<?php

ini_set('display_errors', 'On');
include 'content.php';

?>

<!doctype html>
<html lang="en">
  <head> 
        <title>Loader</title> 
        <link type="stylesheet" rel="stylesheet" href="css/style.css" />
         <link type="stylesheet" rel="stylesheet" href="css/slider.css" />
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> 
        <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" /> -->
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <script type="text/javascript">
			$(document).ready(function() {
			    $("body").css("display", "none");
			 
			    $("body").fadeIn(1000);
			 
			    $("a.transition").click(function(event){
			        event.preventDefault();
			        linkLocation = this.href;
			        $("body").fadeOut(400, redirectPage);      
			    });	
			    $(function() {
				    $( "#slider" ).slider();
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
				<img class="icon livingWill" src="images/icons/whatIf_1.png">
				<h1 class="title">what if</h1>
				<h2 class="question">You needed someone to take care of you 24 hours a day in your own home:</h2>
						
			<div id="slider">			
				<div class="box" id="want">
					<img src= "images/slider/want.png">
					<p> Want Treatment </p>
					</div>
				<div class="box" id="doNotWant">
					<img src= "images/slider/dontWant.png">
					<p>Don't Want Treatment </p>
				</div>				
			</div><!-- closing slider -->
			<center><a id="next" class="answer" href="whatIf_2.php">NEXT</a></center>
			
			</div><!-- closing content -->
			
			<aside>
			<img id="whatIf1" src="images/sideBar/dataWhatIf_1.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>