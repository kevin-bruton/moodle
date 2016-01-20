<?php
session_start();

$question = "::".$_POST['title']."::\n".$_POST['ques-text']."\n\n";

$question = stripslashes($question);
require("writefile.php");

header('Location: http://'.$_SERVER['SERVER_NAME'].'/gift');