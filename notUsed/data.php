<?php 

if ($_REQUEST['page']) {
	$page = $_REQUEST['page'];

	
} else {
	//if they haven't been here yet, just give them the first page (key 0)
	$page = 0;		
}

/* creating a variable that will store all the different types of css classes */
	$classes = array("0"=>'twoTemplateLeft',"1"=>'twoTemplateRight',"2"=>'threeTemplateLeft',"3"=>'threeTemplateRight',"4"=>'threeTemplateMiddle',"5"=>'topAnswer',"6"=>'bottomAnswer');
	

	$pages = array(
/* 	0 */
		array(
			"title" => 'post mortem planning',
			"question" => 'Have you ever thought about the end of <br>your life and how you want it to unfold?',
			"answers" => array("0"=>"YES, OF COURSE.", "NO, I AM YOUNG AND HEALTHY, DO NOT LIKE TO DISCUSS MY DEATH."
			),
		),
/* 		1 */
		array(
			"title" => 'post mortem planning',
			"question" => 'Ever joked about what you would want your funeral to look like, what song would be played and where would it take place?',
			"answers" => array("yes", "NO, NEVER."
			),
		),
/* 		2 */
		array(
			"title" => 'post mortem planning',
			"question" => 'Have you ever communicated these end of life wishes to the world in a serious way?',
			"answers" => array("YES, OF COURSE", "NO, NEVER REALLY DEDICATED THE TIME FOR IT."
			),
		)				
	);

	

?>