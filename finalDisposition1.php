<?php

ini_set('display_errors', 'On');
include 'content.php';

?>

<!doctype html>
<html lang="en">
  <head> 
        <title>Final Disposition</title> 
        <link type="stylesheet" rel="stylesheet" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> 
        <script type='text/javascript' src="js/jquery.simplemodal.1.4.4.min.js"></script>
        <script type="text/javascript">
			$(document).ready(function() {
			    $("body").css("display", "none");
			 
			    $("body").fadeIn(1000);
			 
			    $("a.transition").click(function(event){
			        event.preventDefault();
			        linkLocation = this.href;
			        $("body").fadeOut(400, redirectPage);      
			    });
			
			    $('.answer').click(function(){
			    	$('#exitMessage').fadeIn(1000)
			    	$('#exitMessage').modal()

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
					<h1 class="title">FINAL DISPOSITION</h1>
					<h2 class= "question">What would you be willing to donate?</h2>
					
					<div id ="choices">	
						<center><a  class= "ThreeLongAnswer" href="livingWill_3.php">Any needed organs and/or parts for any purpose</a></center>					
						<center><a  class= "ThreeLongAnswer" href="livingWill_3.php"> My body for anatomical study if needed</a></center>
						<center><a class= "ThreeLongAnswer" href="livingWill_3.php">Only organs and/or parts for the purpose of transplantation, therapy, medical research, or 								education</a></center>	
					</div><!-- closing choices -->
				</div>
			
			<aside>
				<img src="images/sideBar/dataFinalDispo_1.png">
			</aside>
		
			</div><!closing wrapper-->
			
			<?php 
				include 'exitMessage.php';
			?>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>