<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio6</title>
</head>
<body>
	
	<!-- 6.- Diseñe un programa que genere un número aleatorio
	entre 1 y 100 y calcule su sumatorio. Por ejemplo, si sale el
	5, el sumatorio desde 1 hasta 5 que son 15. -->
	<?php
	$num = rand(1,100);
	$total = 0;

	for($i=1;$i<=$num;$i++){
		$total = $total+$i;
	}

	echo "El sumatorio de ".$num." es ".$total;

	?>

	<a href="index.html">Volver</a>

</body>
</html>