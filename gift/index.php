<?php
session_start();
//echo "<small>".session_id()."</small><br>";

echo "
<!DOCTYPE html>
<html>
<head>
<title>Generador GIFT</title>
</head>
<body>
<h1>Generador GIFT</h1>";

/*if (isset($_SESSION['downloaded'])) {
	if ($_SESSION['downloaded']==true) {
		echo "<p style='color:#E68A8A;'>Archivo descargado correctamente. Búscalo en tu ordenador.</p>";
		$_SESSION['downloaded']=false;
	}
	else {
	//	echo "<p style='color:#E68A8A;'>Ningún archivo descargado</p>";
	}
} 
// else echo "<p style='color:#E68A8A;'>Downloaded not set!</p>";
*/
if (isset($_SESSION['started'])) {
	//read file and output it
	if($giftfile = fopen("gift-files/".session_id(),"r")) {
		echo "------------------------------------------------------------------------<br>";
		echo "Éstos son los títulos de las preguntas que ya has añadido al archivo:<br><br>";
	
		while(!feof($giftfile)) {
			$line = fgets($giftfile);
			$isTitle = false;
			if (substr_compare($line,"::",0,2) == 0)
				$isTitle = true;
			if ($isTitle) {
				$title = substr($line,2,(strlen($line)-5));
				echo " ".$title."<br>";
			}
		}
	echo "------------------------------------------------------------------------<br>";
	}
	fclose($giftfile);
} else {
	// don't display anything
	echo "Empezando un nuevo archivo GIFT...<br>";
	echo "------------------------------------------------------------------------<br>";
	//$_SESSION['started']=true;
}

echo "<form method='post' action='add.php'>
¿Qué tipo de pregunta quieres añadir?<br>
<input type='radio' name='ques-type' value='ensayo'>Ensayo<br>
<input type='radio' name='ques-type' value='verd-falso'>Verdadero/Falso<br>
<input type='radio' name='ques-type' value='espacios'>Rellenar los espacios en blanco<br>
<input type='radio' name='ques-type' value='multiple'>Opción múltiple<br>
<input type='submit' value='Añadir'>
</form>";

echo "------------------------------------------------------------------------<br>";
if (isset($_SESSION['started'])) {
	echo "Si quieres, puedes ver el contenido de tu archivo GIFT: <form method='post' action='seefile.php'>
			<input type='submit' value='Ver el archivo'></form>";
	echo "------------------------------------------------------------------------<br>";
	echo "Si has terminado de añadir preguntas puedes: <form method='post' action='download.php'>
			<input type='submit' value='Descargar el archivo GIFT'></form>";
	echo "------------------------------------------------------------------------<br>";
				
	echo "Si prefieres empezar de zero lo puedes hacer también: <form method='post' action='borrar.php'>
				<input type='submit' value='Borrar mis preguntas y empezar de nuevo'></form>";
	echo "------------------------------------------------------------------------<br>";
}

echo "<br><br><small>Aplicación realizada por Kevin Bruton.<br>Si encuentras dificultades o quieres sugerir mejoras: soporte@colegiochesterton.es</small>";
echo "</body>
	</html>";
