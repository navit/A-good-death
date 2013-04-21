<?php 
	
	
	$pages = array(
		0 => array(
			"title" => 'asdsad',
			"question" => 'why?',
			"answers" => array(
				0=> "yes",
				1=> "no"
			),
		),
		1 => array(
			"title" => 'asdsad',
			"question" => 'why?',
			"answers" => array(
				0=> "yes",
				1=> "no"
			),
		),
		2 => array(
			"title" => 'asdsad',
			"question" => 'why?',
			"answers" => array(
				0=> "yes",
				1=> "no"
			),
		),				
	);
	
	
	

	
	$ids = array(0=>'left',1=>'right',);
	
	?>
	
	
	
	
	//iterating through all the pages and creating a page variable for each item in the array.
	
	<?php for($i=0; $i<count($pages); $i++):
		$page = $pages[$i];
	?>
			
		<h1><?php echo $page['title']; ?></h1>
		<h2><?php echo $page['question']; ?></h2>
		<img id="icon" src="images/icons/icon<?php echo $i; ?>.png">

		<?php for($j=0; $j<count($page['answers']); $j++) : 
			var $answer = $page['answers'][$j];
			var $id = $ids[$j];			
		?>
		// html for answers
		
		<?php endfor; ?> // end for $answers forloop
			
		
		
	
	
	<?php endfor; ?> the end of $pages
	
	