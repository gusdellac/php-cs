<?php
    if($_POST){
        //recibir info del formulario HTML (metodo POST)
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        echo "Hola ".$nombre." ".$apellido; //concatenacion de string con variables
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenacion</title>
</head>
<body>
    <form action="ejercicio5.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="idNombre" placeholder="Nombre">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="idApellido" placeholder="Nombre">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>