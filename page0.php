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
			    $(function() {
                    $("#progressbar").progressbar({
                            value:0
                    });
            });
			});
		</script>
	        
   </head>
		
		<body id="toolkit">
			<div id="progressbar">
			</div>
			
			<div id="out">
			<?php
				include 'exitButton.php';
			?>

			</div>
			
			<div id="line"><img src="images/blueLine.png"></div>
			<div id="wrapper">
			<div id= "content">
				<img class="icon" id="postPages" src="images/icons/icon0.png">
				<h1 class="title">POST MORTEM PLANNING</h1>
				<h2 class= "question">Have you ever thought about the end of<br>your life and how you want it to unfold?</h2>
				
				<div id ="choices">	
					<center><a id="TemplateLeft" class="answer" href="page1.php">YES, OF COURSE</a></center>
					<center><a id="TemplateRight" class="answer" href="page1.php">NO, I AM YOUNG AND HEALTHY, DO NOT LIKE TO DISCUSS MY DEATH</a></center>
				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img src="images/sideBar/data0.png">
			</aside>
			</div>
			
			<footer>
			<?php
				include 'footer.php';
			?>
			</footer>
		</body>
</html>