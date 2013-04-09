<!doctype html>
<html lang="en">
  <head> 
        <title>A good death</title> 
        <link type="stylesheet" rel="stylesheet" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script> 
        <script type="text/javascript"></script> 
   </head>
		
		<body>
			<header>
			<?php
				include 'header.php';
			?>
			</header>
			
			<div id="out">
			<!-- <img src="images/exitButton.png">  --> 
			<!-- <a id= "exit" href="#"> I WANT OUT <img id ="ex" src="images/ex.PNG"></a>  -->
		
			<?php
				include 'exitButton.php';
			?>

			</div>
			<center><div id= "content">
				<img id="icon" src="images/icons/icon1.png"> 
				<h1 id="title">POST-MORTEM PLANNING</h1>
				<h2 id= "question">Have you ever thought about the end of <br>your life and how you want it to unfold?</h2>
				
				<div id ="choices">
				<div id="leftAnswer"><a id="answers" href="pageTwo.php">YES, OF COURSE</a></div>
				<p id="or">OR</p> 
				<div id="rightAnswer"><a id="answers" href="pageTwo.php">NO, I AM YOUNG AND<br> HEALTHY, DON NOT LIKE TO <br> DISCUSS MY DEATH.</a></div>
				</div><!-- closing choices -->
			</div><!-- losing content --><center>
			
			<aside>
			<img id="icon" src="images/bars.png">
			<h1>ATTITUDES TOWARD<br>ADVANCE DIRECTIVES</h1>
			</aside>
		</body>
</html>




<!-- onlcick ++  the array of 7 questions. jquery.html -->


