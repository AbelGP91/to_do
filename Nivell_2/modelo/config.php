<?php

$mysql = new mysqli("localhost","root","","to_do");

    if ($mysql->connect_error){

        die("Problemas con la conexión a la base de datos");

    }

    else {

        // echo "Se ha conectado satisfactoriamente a la BDD" . "<br>" . "<br>";

    }

?>