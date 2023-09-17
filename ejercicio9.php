<?php
    if($_POST){
        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];
        

        /*
        > => mayor que
        < => menor que
        >= => mayor igual que
        <= => menor igual que
        (!= o <> ) => diferente
        (!==) => desigualdad estricta
        ==  => igual a
        ===  => igualdad estricta

        */
        if($valorA > $valorB){
            echo "El valor de A es mayor que el valor de B";
        }else{
            echo "El valor de B es mayor que el valor de A";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores relacionales</title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
        <label for="valorA">Valor A:</label>
        <input type="text" name="valorA" id="valorA">

        <label for="valorB">Valor B:</label>
        <input type="text" name="valorB" id="valorB">

        <input type="submit" value="calcular">
    </form>
</body>
</html>