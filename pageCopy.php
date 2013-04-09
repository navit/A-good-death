<?php

// make arrays for our variable page content
$title= array(
	"post mortem planning",
	"post mortem planning",
	"title",
	"post mortem planning");

$questions = array(
	"Have you ever thought about the end of <br>your life and how you want it to unfold?",
	"Ever joked about what you would want your funeral to look like, what song would be played and where would it take place?",
	"Question 3",
	"Question 4",
	"Question 5",
	"Question 6",
	"etc");
	
	
$leftanswers = array(
	"YES, OF COURSE",
	"YES",
	"L Answer 3",
	"L etc");
	
	
$rightanswers = array(
	"NO, I AM YOUNG AND HEALTHY, DON NOT LIKE TO DISCUSS MY DEATH.",
	"NO, NEVER",
	"R Answer 3",
	"R etc");
		
if ($_REQUEST['page']) {
	$page = $_REQUEST['page'];

	
} else {
	//if they haven't been here yet, just give them the first page (key 0)
	$page = 0;		
}


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
        <script type="text/javascript"></script> 
   </head>
		
		<body>
			<header>
			<?php
				include 'header.php';
			?>
			<!-- you could set the width of your progress bar based on how 
			far along the user is in the question sequence
			in this case, i'm setting it to the requested page * 10 + 10 %, 
			so page 0 = 10%, page 1 = 20%, page 2 = 30%, etc… -->
			<div class="progressbar" style="background-color:yellow; width:<?php echo 3 + $page *3; ?>%">PROGRESS</div>
			</header>
			
			<div id="out">
			<?php
				include 'exitButton.php';
			?>

			</div>
			<div id= "content">
				<img id="icon" src="images/icons/icon<?php echo $page; ?>.png">
				<h1 id="title"><?php echo $title[$page]; ?></h1>
				<h2 id= "question"><?php echo $questions[$page]; ?></h2>
				
				<div id ="choices">
				<div id="leftAnswer" class="answer"><center><a id="answers" href="page.php?page=<?php echo $page - 1; ?>"><?php echo $leftanswers[$page]; ?></a></center></div>
				<div id ="or"><p>OR</p></div>
				<div id="rightAnswer" class="answer"><a id="answers" href="page.php?page=<?php echo $page + 1; ?>"><?php echo $rightanswers[$page]; ?></a></div>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="info" src="images/sideBar/data<?php echo $page; ?>.png">
			<!--
<img id="graph" src="images/sideBar/graph.png">
			<h1 id="twoLines">ATTITUDES TOWARDs<br>ADVANCE DIRECTIVES</h1>
			<img id="data" src ="images/sideBar/data/data1.png">
			<h1 id="oneline">Method</h1>
			<p>405 outpatients of 30 primary care physicians at Massachusetts General Hospital.</p>
			<img id="info" src="images/sideBar/info.png">
			<h1 id="oneline">ADVANCE DIRECTIVES</h1>
			<p>A set of written instructions that a person gives to specify what actions should be taken for their health if they are no longer able to make decisions for themselves.</p>		
			<h2 id ="source">Source</h2>
			<a href="http://www.nejm.org/doi/full/10.1056/NEJM199103283241305">N Engl J Med 1991</a>
-->
			</aside>
		</body>
</html>