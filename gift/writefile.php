<?php
// The variable $question must be set previously with the text prepared to be written to the file

if ($giftfile = fopen("gift-files/".session_id(),"a")) {
	fwrite($giftfile,$question);
	fclose($giftfile);
	$_SESSION['started'] = true;
}
