<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio3</title>
</head>
<body>
	
	<!-- 3.- Realizar un programa que pida dos numeros por pantalla
	y saque por pantalla la suma, la resta, la division y
	multiplicacion de ambos -->
	<form method="post">
		<input type="text" name="num1"  placeholder="Numero 1"><br>
		<input type="text" name="num2"  placeholder="Numero 2"><br>
		<input type="submit" value="Continuar"><br>
	</form>

	<?php

	error_reporting(0);

	//variables
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];

	echo "Suma: ".($num1+$num2)."<br>";
	echo "Resta: ".($num1-$num2)."<br>";
	echo "Multiplicacion: ".($num1*$num2)."<br>";
	if($num2 != 0){
		echo "Division: ".($num1/$num2)."<br>";
	}else{
		echo "No se puede dividir por 0";
	}
	?>

	<a href="index.html">Volver</a>

</body>
</html>