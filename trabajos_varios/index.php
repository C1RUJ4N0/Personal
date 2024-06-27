<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Edad</title>
</head>
<body>
        <h2>Verificar Edad</h2>
    <form action="verificar_edad.php" method="post">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Verificar</button>
    </form>
<?php
$edad = "";
if ($edad >= 18) {
    echo "Es mayor de edad";
} else {
    echo "Es menor de edad";
}
?>
</body>
</html>