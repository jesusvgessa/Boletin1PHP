<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    
    <!-- 2.- Mostrar en pantalla los numeros pares del 1 al 100 -->
    <?php
    for ($i=0;$i<=100;$i++){
        if($i%2==0){
            echo $i."<br>";
        }
    }
    ?>

    <a href="index.html">Volver</a>

</body>
</html>