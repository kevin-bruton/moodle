<?php
// The variable $newfilecontent must be set previously with the text prepared to be written to the file
session_start();

$newfilecontent = stripslashes($_POST['fileedited']);
if ($giftfile = fopen("gift-files/".session_id(),"w")) {
	fwrite($giftfile,$newfilecontent);
	fclose($giftfile);
	$_SESSION['started'] = true;
}
	header('Location: http://'.$_SERVER['SERVER_NAME'].'/gift');