<?php
session_start();

$question = "::".$_POST['title']."::\n".$_POST['ques-text']."\n{\n";

for ($x=1; $x<7; $x++) {
	if (in_array("option".$x, $_POST['correct'])) {
		$question = $question."=".$_POST['optiontext'.$x]." #".$_POST['retro'.$x]."\n";
	}
	else if ($_POST['optiontext'.$x]!="")
		$question = $question."~".$_POST['optiontext'.$x]." #".$_POST['retro'.$x]."\n";
}

$question = $question."}\n\n";
$question = stripslashes($question);

require("writefile.php");

header('Location: http://'.$_SERVER['SERVER_NAME'].'/gift');