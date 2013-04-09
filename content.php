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