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
			});
		</script>
	        
   </head>
		
		<body id="toolkit">
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

				
				<?php 
				
				if ($numofanswers[$page] == "one") {
						
						echo '<div class="top answer"><center><a class="linkAnswer" href="page.php?page=' .  ($page - 1) . '">' . $topAnswer[$page] . '</a></center></div>';
				}
				
				
				if ($numofanswers[$page] == "two") {
						
						echo '<div class="TemplateLeft answer"><center><a class="linkAnswer" href="page.php?page=' .  ($page - 1) . '">' . $leftAnswers[$page] . '</a></center></div>';
						echo '<div class="TemplateRight answer"><center><a class="linkAnswer" href="page.php?page=' . ($page + 1) . '">' . $rightAnswers[$page] . '</a></center></div>';
				}
				
				
				if ($numofanswers[$page] == "three") {
						
						echo '<div class="TemplateLeft answer"><center><a class="linkAnswer" href="page.php?page=' .  ($page - 1) . '">' . $leftAnswers[$page] . '</a></center></div>';
						echo '<div class="TemplateRight answer"><center><a class="linkAnswer" href="page.php?page=' . ($page + 1) . '">' . $rightAnswers[$page] . '</a></center></div>';
						echo '<div class="third answer"><center><a class="linkAnswer" href="page.php?page=' . ($page + 1) . '">' . $thirdAnswers[$page] . '</a></center></div>';
				}
				
				
				if ($numofanswers[$page] == "four") {
						
						echo '<div class="TemplateLeft answer"><center><a class="linkAnswer" href="page.php?page=' .  ($page - 1) . '">' . $leftAnswers[$page] . '</a></center></div>';
						echo '<div class="TemplateRight answer"><center><a class="linkAnswer" href="page.php?page=' . ($page + 1) . '">' . $rightAnswers[$page] . '</a></center></div>';
						echo '<div class="LeftBottom answer"><center><a class="linkAnswer" href="page.php?page=' .  ($page - 1) . '">' . $leftBottomAnswers[$page] . '</a></center></div>';
						echo '<div class="RightBottom answer"><center><a class="linkAnswer" href="page.php?page=' . ($page + 1) . '">' . $rightBottomAnswers[$page] . '</a></center></div>';

				}
				
							
				?>	

				</div><!-- closing choices -->
			</div><!-- losing content -->
			
			<aside>
			<img id="info" src="images/sideBar/data<?php echo $page; ?>.png">
			</aside>
			
			<!--
<aside>
			<img id="info" <?php if ($page==0) {
			echo "style='margin-left:-400px;'";
			}
			
			?> src="images/sideBar/data<?php echo $page; ?>.png">
			</aside>
-->
			<footer>
			<!--
<?php
				include 'footer.php';
			?>
-->
			</footer>
		</body>
</html>