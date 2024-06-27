<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Empleado</title>
</head>
<body>
    <form action="4-Trabajo-Nom-Salario.php" method="post">
    <h2>Introduzca sus datos</h2>
    Ingresá tu nombre:
        <input type="text" name="nomUsuario" id="">
    Ingresá tu salario:
        <input type="number" name="numSalario" id="">
    Ingresá tus años trabajados:
        <input type="number" name="numTrabajo" id="">
        <br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>
<?php
if ($_POST) {
    $nomUsuario = $_POST["nomUsuario"];
    $numSalario = $_POST["numSalario"];
    $numTrabajo = $_POST["numTrabajo"];

    echo "<br/>";
    echo "El señor ", $nomUsuario, ", cuenta con un salario de $", $numSalario, " y lleva trabajando para nosotros ", $numTrabajo, " años.";

}
?>