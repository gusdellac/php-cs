<?php
    if($_POST){
        //recibir info del formulario HTML (metodo POST)
        $nombre=$_POST["txtNombre"];

        echo "Hola ".$nombre;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" id="" placeholder="Nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>