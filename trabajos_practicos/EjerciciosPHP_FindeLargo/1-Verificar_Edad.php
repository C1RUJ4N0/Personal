<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificacion de Edad</title>
</head>
<body>
    <form action="1-Verificar_Edad.php" method="post">
    <h2>Verificar Edad</h2>
    Ingresa tu edad:
        <input type="number" name="numEdad" id="">
        <br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>
<?php
if ($_POST) {
    $numEdad = $_POST['numEdad'];
    
    if ($numEdad >= 18){
        echo "<br/>";
        echo "El usuario es mayor de edad";
    }else{
        echo "<br/>";
        echo "El usuario es menor de edad";
    }
}
?>