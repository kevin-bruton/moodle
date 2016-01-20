<?php


echo "<!DOCTYPE html>
		<html>
		<head>
		<title>Añadir pregunta</title>
		</head>
		<body>";

if ($_POST['ques-type']=='ensayo') {
	echo "<h1>Añadiendo una pregunta de tipo ensayo</h1>
			<form method='post' action='insertessay.php'>
			Título de la pregunta: <input type='text' name='title' size='50'><br><br>
			Texto de la pregunta: <textarea name='ques-text' rows='3' cols='60'></textarea><br><br>
			<input type='submit' value='Añadir esta pregunta'>
			</form>";
} 
else if ($_POST['ques-type']=='verd-falso') {
	echo "<h1>Añadiendo una pregunta de tipo verdadero-falso</h1>
			<form method='post' action='inserttruefalse.php'>
			Título de la pregunta: <input type='text' name='title' size='50'><br><br>
			Texto de la frase: <textarea name='ques-text' rows='3' cols='60'></textarea><br><br>
			¿La frase es verdadera o falsa? <br>
			<input type='radio' name='correctans' value='true'>Verdadero<br>
			<input type='radio' name='correctans' value='false'>Falso<br><br>
			<input type='submit' value='Añadir esta pregunta'>
			</form>";
}
else if ($_POST['ques-type']=='espacios') {
	echo "<h1>Añadiendo una pregunta de tipo llenado de espacios en blanco</h1>
			<p>Instrucciones: <br>
			Donde quieres incluir un espacio en blanco,
			has de incluir las respuestas dentro de llaves,
			precedido por la señal de 'igual a' (=).<br>
			Así, se puede incluir más de una posible respuesta correcta.<br>
			Por ejemplo: Si ponemos 'Dos más {=dos =2} son cuatro.', como texto de la frase,<br>
			entonces el alumno puede escribir 'dos' o '2' en el espacio, y se aceptará ambas respuestas.</p>
			<form method='post' action='insertblank.php'>
			Título de la pregunta: <input type='text' name='title' size='50'><br><br>
			Texto de la frase: <textarea name='ques-text' rows='3' cols='60'></textarea><br><br>
			<input type='submit' value='Añadir esta pregunta'>
			</form>";
}
else if ($_POST['ques-type']=='multiple') {
	echo "<h1>Añadiendo una pregunta de tipo opción múltiple</h1>
			<p>Instrucciones: <br>
			Puedes añadir hasta sies opciones por pregunta.<br>
			La retroalimentación es opcional. Si no lo quieres añadir, déjalo en blanco.<br>
			Debes seleccionar al menos una opción como correcta, pero puedes seleccionar más de una si quieres.<br>
			
			<form method='post' action='insertmultiple.php'>
			Título de la pregunta: <input type='text' name='title' size='50'><br><br>
			Texto de la pregunta: <textarea name='ques-text' rows='3' cols='60'></textarea><br><br>
			<table>
			<tr>
				<th></th>
				<th>Correcto</th>
				<th>Texto de la opción</th>
				<th>Retroalimentación</th>
			</tr>";
	for ($x=1; $x<7; $x++) {
		echo "<tr>
				<td>Opción ".$x."</td>
				<td><input type='checkbox' name='correct[]' value='option".$x."'></td>
				<td><input type='text' name='optiontext".$x."' size='50'></td>
				<td><input type='text' name='retro".$x."' size='50'></td>
			</tr>";
	}
		echo "</table><br>
			<input type='submit' value='Añadir esta pregunta'>
			</form>";
}
else 
	echo "<p>Debes seleccionar al menos un tipo de pregunta.</p>
			<form action='index.php'><input type='submit' value='Volver'></form>";

echo "</body>
		</html>";