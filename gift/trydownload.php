<?php

session_start();
if (isset($_SESSION['started'])) {
	$giftfile = "gift-files/".session_id();
	header('Location: http://'.$_SERVER['SERVER_NAME'].'/gift/download.php');
	echo "<!DOCTYPE html><html><head><title>Download GIFT</title></head><body>";

	echo "Archivo descargado. Búscalo en tu ordenador.<br><br><form action='index.php'><input type='submit' value='Volver al inicio'></form>";
	echo "</body></html>";  
}
else {
	echo "<!DOCTYPE html><html><head><title>Download GIFT</title></head><body>";
	echo "No se ha comenzado la sesión todavía.";
	echo "<br><br><form action='index.php'><input type='submit' value='Volver al inicio'></form>";
	echo "</body></html>";	
}

