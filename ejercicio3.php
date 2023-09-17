<?php

    /*Metodo get permite recibir una solicitud get y retorna los datos a traves de la url (ej :
    http://localhost/ejercicios/ejercicio3.php?nombre=Gustavo+De+Llac
    ) */
    if($_GET){
        $nombre=$_GET["nombre"];
        echo "Hola ".$nombre;
    }
?>