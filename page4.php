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
			
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" id="postPages" src="images/icons/icon4.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Who did you talk to about it with?</h2>
				
				<div id ="choices">	
					<form>
					<p> <span style="color:#FF6666"> +1</span> generation ( i.e. mother)</p>
					<input class="inputAnswer" type="text" placeholder="enter your name here" name="data">
					<p> <span style="color:#FF6666">0</span> your generation ( i.e. brother)</p>
					<input class="inputAnswer" type="text" placeholder="enter your name here" name="data">
					<p> <span style="color:#FF6666"> -1</span>  generation ( i.e. your kids)</p>
					<input class="inputAnswer" type="text" placeholder="enter your name here" name="data">
					</form>	
					<form action="page5.php"><input class="submitAnswer" type="submit" value="submit"></form>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="page4" src="images/sideBar/data4.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>