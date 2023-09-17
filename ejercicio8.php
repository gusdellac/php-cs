<?php
    if($_POST){
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $division = $valorA / $valorB;
        $multiplicacion = $valorA * $valorB;

        echo "El resultado de la suma es: ".$suma."<br/>";
        echo "El resultado de la resta es: ".$resta."<br/>";
        echo "El resultado de la division es: ".$division."<br/>";
        echo "El resultado de la multiplicacion es: ".$multiplicacion."<br/>";
        


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        <label for="valorA">Valor A:</label>
        <input type="text" name="valorA" id="valorA">

        <label for="valorB">Valor B:</label>
        <input type="text" name="valorB" id="valorB">

        <input type="submit" value="calcular">
    </form>
</body>
</html>