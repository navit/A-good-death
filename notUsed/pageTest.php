<?php
ini_set('display_errors', 'On');
include 'data.php';

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

			<?php for($i=0; $i<count($pages); $i++):
				$page = $pages[$i];
				echo $i;
			?>
			
				<div id= "content">
					<img id="icon" src="images/icons/icon<?php echo $i; ?>.png">
					<h1 id="title"><?php echo $page['title']; ?></h1>
					<h2 id= "question"><?php echo $page['question']; ?></h2>
						
					<?php for($j=0; $j<count($page['answers']); $j++): 
							$answer = $page['answers'][$j];
							$class = $classes[$j];			
						?>
					<div id ="choices">
					
				<!--
	<?php if ($numofanswers[$page] == 2) {
						
						echo '<div class="twoTemplateLeft answer"><center><a class="linkAnswer" href="pageTest.php?page=' .  $page - 1 . '">' . $leftanswers[$page] . '</a></center></div>';
						echo '<div class="twoTemplateRight answer"><center><a class="linkAnswer" href="pageTest.php?page=' . $page + 1 . '">' . $rightanswers[$page] . '</a></center></div>';
						
						
						
					}
					
					?>
-->
					
						
						<div class="threeTemplateLeft answer"><center><a class="linkAnswer" href="pageTest.php?page=<?php echo $page - 1; ?>"><?php echo $leftanswers['answers']; ?></a></center></div>
						<div class="threeTemplateRight answer"><center><a class="linkAnswer" href="pageTest.php?page=<?php echo $page + 1; ?>"><?php echo $page['answers']; ?></a></center></div>
						<div class="threeTemplateMiddle answer"><center><a class="linkAnswer" href="pageTest.php?page=<?php echo $page + 1; ?>"><?php echo $page['answers']; ?></a></center></div>
						<div class="topAnswer answer"><center><a class="linkAnswer" href="pageTest.php?page=<?php echo $page + 1; ?>"><?php echo $page ['answers']; ?></a></center></div>
						<div class="bottomAnswer answer"><center><a class="linkAnswer" href="pageTest.php?page=<?php echo $page + 1; ?>"><?php echo $page ['answers']; ?></a></center></div>
					</div><!-- closing choices -->		
					<?php endfor; ?> <!-- end for choices -->	
				</div><!-- losing content -->		
	
	
				<aside>
					<img id="info" src="images/sideBar/data<?php echo $i; ?>.png">
				</aside>
			
			<?php endfor; ?> <!-- the end of $pages -->
									
			<footer>
			<!--
<?php
				include 'footer.php';
			?>
-->
			</footer>
		</body>
</html>