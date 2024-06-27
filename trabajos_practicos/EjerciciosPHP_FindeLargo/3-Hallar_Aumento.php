<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento de Sueldo</title>
</head>
<body>
    <form action="3-Hallar_Aumento.php" method="post">
    <h2>Verificar Edad y Estatura</h2>
    Ingresá tu sueldo:
        <input type="number" name="numSueldo" id="">
        <br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>

<?php
if ($_POST) {
    $numSueldo = $_POST['numSueldo'];
    
    if ($numSueldo >= 320000 && $numSueldo <= 500000){
        $numAumento = $numSueldo * 5/100;
        $numTotal = $numAumento + $numSueldo;

            echo "<br/>";
            echo "Su sueldo es de: ", $numSueldo, " y su aumento es de: ", $numTotal;
        }
    if ($numSueldo < 320000){
        $numAumento = $numSueldo * 8/100;
        $numTotal = $numAumento + $numSueldo;

            echo "<br/>";
            echo "Su sueldo es de: ", $numSueldo, " y su aumento es de: ", $numTotal;
        }
}

?>