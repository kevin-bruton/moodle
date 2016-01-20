<?php
session_start();

if ($_POST['correctans']=='true')
	$correct = "T";
else 
	$correct = "F";

$question = "::".$_POST['title']."::\n".$_POST['ques-text']." {".$correct."} \n\n";

$question = stripslashes($question);
require("writefile.php");

header('Location: http://'.$_SERVER['SERVER_NAME'].'/gift');