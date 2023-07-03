<?php

session_start();

include "funcionsTasques.php";
require "../../modelo/config.php";
        
echo "La ID de la Tasca escollida és: " . $_POST['idTarea'];
$idTarea = $_POST['idTarea'];
$idTarea = (int)$idTarea;
echo "<br>";

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

echo "La opció escollida és: " . $opcioTasques;
echo "<br>" . "<br>";



if ($opcioTasques === "Veure") { 

    veureTasques($idTarea); 

}

if ($opcioTasques === "Modificar") { 

    modificarTasques($idTarea); 

}

if ($opcioTasques === "Borrar") { 

    borrarTasques($idTarea);

}

    $mysql->close();

?>