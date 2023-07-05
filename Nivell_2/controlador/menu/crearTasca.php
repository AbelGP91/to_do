
<?php

    session_start();
    
    require "../../config.php";

    $id = $_SESSION["idUsuario"];
    $titulo = $_POST['titulo'];
    $descripcio = $_POST['descripcio'];
    $dataInici = $_POST['dataInici'];
    $dataFi = $_POST['dataFi'];
    $estat = $_POST['estat'];
  
    $sql = "INSERT INTO to_do.tasques(nom_tasques,descrip_tasques,estat_tasques,inici_tasques,fi_tasques,Usuario_idUsuario) 
    VALUES ('$titulo','$descripcio','$estat','$dataInici','$dataFi','$id')";
        
    $mysql->query($sql);    

    echo "Se han añadido los siguientes datos: <br> <br>";

    echo "Tarea: " . $titulo . "<br>";
    echo "Descripción: " . $descripcio . "<br>";
    echo "Fecha de Inicio: " . $dataInici . "<br>";
    echo "Fecha Fin: " . $dataFi . "<br>";
    echo "Estado: " . $estat . "<br>";

    $mysql->close();
    
?>

