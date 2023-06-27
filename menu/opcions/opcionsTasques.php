<?php

session_start();

include "funcionsTasques.php";
    
    $mysql = new mysqli("localhost","root","","to_do");

    if ($mysql->connect_error){

        die("Problemas con la conexión a la base de datos");

    }

    else {

        echo "Se ha conectado satisfactoriamente a la BDD" . "<br>" . "<br>";

    }


echo "La ID de la Tasca escollida és: " . $_POST['idTarea'];
$idTarea = $_POST['idTarea'];
$idTarea = (int)$idTarea;
echo "<br>";

// var_dump($idTarea);
// echo "<br>";

$opcioTasques = null;

if (isset($_POST['veure'])){

    $opcioTasques = $_POST['veure'];

}

if (isset($_POST['modificar']) && is_null($opcioTasques)){

    $opcioTasques = $_POST['modificar'];

}

if (is_null($opcioTasques)){

    $opcioTasques = $_POST['borrar'];

}

// echo "Toda esta mierda me lleva a ... ";
//var_dump($opcioTasques);

echo "La opció escollida és: " . $opcioTasques;
echo "<br>" . "<br>";



if ($opcioTasques === "Veure") { 

    // echo "Veure";
    veureTasques($idTarea); 

}

if ($opcioTasques === "Modificar") { 

    // echo "Mod"; 

}

if ($opcioTasques === "Borrar") { 

    // echo "Delete"; 

}




    $mysql->close();

?>