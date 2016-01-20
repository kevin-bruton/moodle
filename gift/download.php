<?php
session_start();
if (isset($_SESSION['started'])) {
	$giftfile = "gift-files/".session_id();
	header('Content-Disposition: attachment; filename="preguntas-gift.txt"');
	echo file_get_contents($giftfile);
	$_SESSION['downloaded']=true;

//	header('Location: http://'.$_SERVER['SERVER_NAME'].'/gift');
}
else {
	echo "<!DOCTYPE html><html><head><title>Descarga</title></head><body>";
	echo "No se ha comenzado la sesión todavía.";
	echo "<br><br><form action='index.php'><input type='submit' value='Volver al inicio'></form>";
	echo "</body></html>";
}
