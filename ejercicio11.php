<?php
    if($_POST){
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];
        
        if($valorA > $valorB){
            echo "El valor de A es mayor al valor de B"."<br/>";
            
            if($valorB < 10){
                echo "El valor de B es menor que 10"."<br/>";
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales if</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        <label for="valorA">Valor A:</label>
        <input type="text" name="valorA" id="valorA">

        <label for="valorB">Valor B:</label>
        <input type="text" name="valorB" id="valorB">

        <input type="submit" value="calcular">
    </form>
</body>
</html>