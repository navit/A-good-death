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
				<img class="icon livingWill" src="images/icons/livingWill_1.png">
				<h1 class="title">LIVING WILL</h1>
				<h2 class= "question">How important is a pain free existence to you? How much pain can you tolerate on a chronic basis before life is no longer worth living?<br> CAN YOU ANSWER THESE QUESTIONS?<h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="livingWill_2.php">YES</a></center>
					<center><a id="TemplateRight" class="answer" href="#">NO,thanks</a></center>
				</div><!-- closing choices -->
			
			</div><!-- closing content -->
			
			<aside>
			</aside>
			</div><!closing wrapper-->
			
			<div id="exitMessage">
			<div id="message">
				<h1> SO, YOU are not convinced yet!<br>before you go:</h1>
				<img src= "images/exitButton/info.png">
				<p> End life decisions can be a very hard and emotional issue to deal<br> with. Although it is better to start the process early and gain as<br> much knowledge as you can, we 							understand that one might fear<br> going through with it.</p> <p id="reminder"> We could remind you in</p> 
				<select>
				  <option value="one week">one week</option>
				  <option value="one month">one month</option>
				  <option value="6 month">six months</option>
				  <option value="one year">one year </option>
				</select> 
				  <p>to come back and continue the process.<br>Would you like that?</p>
				<a class="linkAnswer exitLink" href="out">YES</a>
				<a class="linkAnswer exitLink" href="livingWill_2.php">No, I would like to go back</a>
			</div>
			</div><!closing exitmessage-->
			
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>