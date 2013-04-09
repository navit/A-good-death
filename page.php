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
	"NO, I AM YOUNG AND HEALTHY, DO NOT LIKE TO DISCUSS MY DEATH.",
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
        <script type="text/javascript">
			$(document).ready(function() {
			    $("body").css("display", "none");
			 
			    $("body").fadeIn(1000);
			 
			    $("a.transition").click(function(event){
			        event.preventDefault();
			        linkLocation = this.href;
			        $("body").fadeOut(400, redirectPage);      
			    });
			         
			    function redirectPage() {
			        window.location = linkLocation;
			    }
			});
		</script>
	        
   </head>
		
		<body>
			<header>
			
			<!-- you could set the width of your progress bar based on how 
			far along the user is in the question sequence
			in this case, i'm setting it to the requested page * 10 + 10 %, 
			so page 0 = 10%, page 1 = 20%, page 2 = 30%, etc… -->
			<div id="progressbar" style="background-color:yellow; width:<?php echo 1 + $page *1; ?>%"><?php include 'header.php';?></div>
			</header>
			
			<div id="out">
			<?php
				include 'exitButton.php';
			?>

			</div>
			
			<img id="line" src="images/blueLine.png">
			
			<div id= "content">
				<img id="icon" src="images/icons/icon<?php echo $page; ?>.png">
				<h1 id="title"><?php echo $title[$page]; ?></h1>
				<h2 id= "question"><?php echo $questions[$page]; ?></h2>
				
				<div id ="choices">
				<div id="leftAnswer" class="answer"><center><a class="linkAnswer" href="page.php?page=<?php echo $page - 1; ?>"><?php echo $leftanswers[$page]; ?></a></center></div>
				<div id ="or"><p>OR</p></div>
				<div id="rightAnswer" class="answer"><center><a class="linkAnswer" href="page.php?page=<?php echo $page + 1; ?>"><?php echo $rightanswers[$page]; ?></a></center></div>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="info" src="images/sideBar/data<?php echo $page; ?>.png">
			</aside>
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>