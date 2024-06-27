<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacaciones</title>
</head>
<body>
    <form action="5-Trabajo-Vacaciones.php" method="post">
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
    $nomUsuario = $_POST['nomUsuario'];
    $numSalario = $_POST['numSalario'];
    $numTrabajo = $_POST['numTrabajo'];

    if (($numTrabajo >= 10) && $numTrabajo <= 15 && $numSalario <= 350000) {
 {
        echo "<br/>";
        echo "El señor ", $nomUsuario, " cuenta con un salario de $", $numSalario, " y lleva trabajando para nosotros ", $numTrabajo, " años, le corresponde vacaciones pagas.";
        }
            }else{
                echo "<br/>";
                echo "No le corresponde vacaciones pagas.";
    }
}
?>