<?php
session_start();
$giftfilename = 'gift-files/'.session_id();
$giftfile = fopen($giftfilename,"r");
$filecontent = fread($giftfile,filesize($giftfilename));
fclose($giftfile);
//$filecontent = nl2br($filecontent);

echo "<!DOCTYPE html><html><head><title>Generador GIFT</title></head>
		<body><h1>Contenido de tu archivo GIFT</h1>
		<p>Aviso: No realices cambios si no entiendes el formato GIFT. Si quieres aprender sigue este <a href='http://misdocumentos.net/wiki/moodle/cuestionarios/formato_gift'>link.</a></p>
		<form action='writeeditedfile.php' method='post'>
		<textarea name='fileedited' rows='25' cols='100'>".$filecontent."</textarea><br>
		<input type='submit' value='Guardar cambios'>
		</form>
		<form action='index.php'><input type='submit' value='Cancelar edición y volver al inicio'></form>
		</body></html>";