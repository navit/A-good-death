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
			         
			    function redirectPage() {
			        window.location = linkLocation;
			    }
			    $('#clickLeft').click(function(){
				    
			    });
			    
			    $('clickRight').click(function(){
				    
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
			
			<!-- <img class="line" src="images/blueLine.png"> -->
			<div id="wrapper">
			<div class="nosideBar">
				<img class="icon postPages" src="images/icons/iconNo1.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question"><span style="color:#FF6666">We plan everything so why not plan the end of our lives?</span><br>you plan your schedules, your careers and work projects, your weddings and vacations, and even 					retirement. The one area that most of us avoid planning is the end of our life, but that needs thought to. <br>Convinced?</h2>
				
				<div id ="choices">	
					<div class="TemplateLeft answer clickLeft"><center><a class="linkAnswer" href="planning.php">YES</a></center></div>
					<div class="TemplateRight answer clickRight"><center><a class="linkAnswer" href="pageNo2.php">NO, I still don’t understand why now? I have enough on my plate.</a></center></div>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<!-- <img src="images/sideBar/data0.png"> -->
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>