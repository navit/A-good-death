
<?php


if (isset($_REQUEST['page']) && $_REQUEST['page']!="") 
{
	$page = (int)($_REQUEST['page']);
	
} else {
	//if they haven't been here yet, just give them the first page (key 0)
	$page = 0;		
}


// make arrays for our variable page content

$title= array(
	"post mortem planning",
	"post mortem planning",
	"post mortem planning",
	"post mortem planning",
	"post mortem planning",
	"END-OF-LIFE TALKS",
	"END-OF-LIFE TALKS",
	"END-OF-LIFE TALKS");

$questions = array(
	"Have you ever thought about the end of <br>your life and how you want it to unfold?",
	"Ever joked about what you would want your funeral to look like, what song would be played and where would it take place?",
	"Have you ever communicated these end of life wishes to the world in a serious way?",
	"Ever made casual statements to your family like “Don’t keep me alive on machines,” “No Heroics,” or “Make sure I am not in pain” ?",
	"Who did you talk to about it with?",
	"Do you trust and know this person well enought to let him or her communicate your believes at a moment when you can no longer speak for yourself?",
	"Is this person at least 18 years old?",
	"question7");
			
$leftAnswers = array(
	"YES, OF COURSE.",
	"YES.",
	"YES, OF COURSE.",
	"YES.",
	"SIGNIFICANT OTHER",
	"yes, ofcourse",
	"yes");
			
$rightAnswers = array(
	"NO, I AM YOUNG AND HEALTHY, DO NOT LIKE TO DISCUSS MY DEATH.",
	"NO, NEVER.",
	"NO, NEVER REALLY DEDICATED THE TIME FOR IT.",
	"NO, NEVER.",
	"OLD FRIEND","NO, I HAVE NO ONE TO TRUST TO ACT AS MY HEALTH CARE AGENT",
	"no");
	
$leftBottomAnswers = array(
	"",
	"",
	"",
	"",
	"MEDICALPROFESSIONAL");

$rightBottomAnswers = array(
	"",
	"",
	"",
	"",
	"FAMILY MEMBER");

$thirdAnswers= array(
	"",
	"",
	"hello",
	"",
	"");
	
$topAnswer = array(
	"",
	"",
	"",
	"",
	"MEDICALPROFESSIONAL");

		
$numofanswers = array("one", "two", "three", "four",);
			
				
				
?>	

