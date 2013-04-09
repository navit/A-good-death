<?php 
// make arrays for our variable page content
$questions = array(
	"Have you ever thought about the end of <br>your life and how you want it to unfold?",
	"Have you ever thought about the end of <br>your life and how you want it to unfold?",
	"Question 3",
	"Question 4",
	"Question 5",
	"Question 6",
	"etc");
	
	
$leftanswers = array(
	"YES, OF COURSE",
	"L Answer 2",
	"L Answer 3",
	"L etc");
	
	
$rightanswers = array(
	"NO, I AM YOUNG AND HEALTHY, DON NOT LIKE <br> TO DISCUSS MY DEATH.",
	"R Answer 2",
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
			
			
			<div class="progressbar" style="background-color:yellow; width:<?php echo 10 + $page *10; ?>%">PROGRESS</div>
			</header>
			<center><div id= "content">
				<img id="icon" src="images/icons/icon<?php echo $page; ?>.png">
				<h1 id="title">POST-MORTEM PLANNING</h1>
				<h2 id= "question"><?php echo $questions[$page]; ?></h2>
				
				<div id ="choices">
				<div id="leftAnswer"><a id="answers" href="navit.php?page=<?php echo $page - 1; ?>"><?php echo $leftanswers[$page]; ?></a></div>
				<p id="or">OR</p> 
				<div id="rightAnswer"><a id="answers" href="navit.php?page=<?php echo $page + 1; ?>"><?php echo $rightanswers[$page]; ?></a></div>
				</div><!-- closing choices -->
			</div><!-- losing content --></center>
			
			<aside>
			<img id="icon" src="images/bars.png">
			<h1>ATTITUDES TOWARD<br>ADVANCE DIRECTIVES</h1>
			</aside>
		</body>
</html>