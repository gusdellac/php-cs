<?php
    if($_POST){
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];
        

        /*
        && = AND
        || = OR
        (!) = NOT
        xor = Se ejecutará si una y solo una de las condiciones es verdadera.

        */
        if(($valorA != $valorB) && ($valorA > $valorB)){
            echo "El valor de A es diferente y mayor que el valor de B";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        <label for="valorA">Valor A:</label>
        <input type="text" name="valorA" id="valorA">

        <label for="valorB">Valor B:</label>
        <input type="text" name="valorB" id="valorB">

        <input type="submit" value="calcular">
    </form>
</body>
</html>