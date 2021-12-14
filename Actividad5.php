<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio5</title>
</head>
<body>
		
	<!-- 5.- Pedir un numero por pantalla, escribir la tabla de
	multiplicar de dicho numero -->
	<form method="post">
		<input type="text" name="num"  placeholder="Numero"><br>
		<input type="submit" value="Continuar"><br>
	</form>

	<?php
	error_reporting(0);

	//variables
	$num = $_POST["num"];

	for ($i=0;$i<=10;$i++){
		$res=$num*$i;
		echo $num." * ".$i." = "."$res"."<br>";
	}
	?>

	<a href="index.html">Volver</a>

</body>
</html>