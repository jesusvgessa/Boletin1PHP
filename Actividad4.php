<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    
    <!-- 4.- Crear una página que muestre una tabla de conversión
    de euros a pesetas como la que aparece en la figura 1. La
    equivalencia es 1€ = 166,386 pts. -->
    <form method="post">
        <input type="text" name="cantidad"  placeholder="Cantidad en Euros"><br>
        <input type="submit" value="Continuar"><br>
    </form>

    <?php
    error_reporting(0);

    //variables
    $cant = $_POST["cantidad"];

    ?>

    <table style="border: 2px solid black;
                    border-collapse: collapse;
                    margin-left: 10%;
                    margin-top: 10%;">
        <tr>
            <td style="padding: 10px;
                        border: 2px solid black;">Euros</td>
            <td style="padding: 10px;
                        border: 2px solid black;">Pesetas</td>
        </tr>
        <tr>
            <td style="padding: 10px;
                        border: 2px solid black;">1 Euro</td>
            <td style="padding: 10px;
                        border: 2px solid black;">166.386 pts.</td>
        </tr>
        <tr>
            <td style="padding: 10px;
                        border: 2px solid black;">
            <?php echo $cant."Euros"; ?>
            </td>
            <td style="padding: 10px;
                        border: 2px solid black;">
            <?php echo ($cant*166.386)."pts"; ?>
            </td>
        </tr>
    </table>

    <a href="index.html">Volver</a>

</body>
</html>