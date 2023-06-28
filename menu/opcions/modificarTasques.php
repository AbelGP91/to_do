<?php

session_start();

include "funcionsTasques.php";

$idTarea=$_POST['idTarea'];

echo "La tarea con ID = " . $idTarea . " ha sido actualizada";

$mysql = new mysqli("localhost","root","","to_do");

if(isset($_POST['titulo']) && ($_POST['titulo']!="")) {
    
    $titulo=$_POST['titulo'];

    $sql = "UPDATE to_do.tasques SET nom_tasques = '$titulo' WHERE idTasques = '$idTarea'
                " or die($mysql->error);

        $update = $mysql->query($sql);

}

if(isset($_POST['descripcio']) && ($_POST['descripcio']!="")) {
    
    $descripcio=$_POST['descripcio'];

    $sql = "UPDATE to_do.tasques SET descrip_tasques = '$descripcio' WHERE idTasques = '$idTarea'
                " or die($mysql->error);

        $update = $mysql->query($sql);

}
        
if(isset($_POST['estat']) && ($_POST['estat']!="")) {
    
    $estat=$_POST['estat'];

    $sql = "UPDATE to_do.tasques SET estat_tasques = '$estat' WHERE idTasques = '$idTarea'
                " or die($mysql->error);

        $update = $mysql->query($sql);

}

if(isset($_POST['dataInici']) && ($_POST['dataInici']!="")) {
    
    $dataInici=$_POST['dataInici'];

    $sql = "UPDATE to_do.tasques SET inici_tasques = '$dataInici' WHERE idTasques = '$idTarea'
                " or die($mysql->error);

        $update = $mysql->query($sql);

}

if(isset($_POST['dataFi']) && ($_POST['dataFi']!="")) {
    
    $dataFinal=$_POST['dataFi'];

    $sql = "UPDATE to_do.tasques SET fi_tasques = '$dataFinal' WHERE idTasques = '$idTarea'
                " or die($mysql->error);

        $update = $mysql->query($sql);

}

veureTasques($idTarea);



?>