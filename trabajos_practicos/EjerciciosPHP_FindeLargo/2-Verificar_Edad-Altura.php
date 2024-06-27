<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad y Estatura</title>
</head>
<body>
    <form action="2-Verificar_Edad-Altura.php" method="post">
    <h2>Verificar Edad y Estatura</h2>
    Ingrese su edad:
        <input type="number" name="numEdad" id="">
    Ingrese su altura en centímetros:
        <input type="number" name="numAltu" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
if ($_POST) {
    $numEdad = $_POST['numEdad'];
    $numAltu = $_POST['numAltu'];

    if ($numEdad >= 18 && $numAltu <= 170){
        echo "<br/>";
        echo "Puede ingresar a la montaña rusa";
    }else{
        echo "<br/>";
        echo "No puede ingresar a la montaña rusa";
    }
}
?>