
<?php

    session_start();
    
    $mysql = new mysqli("localhost","root","","to_do");

    if ($mysql->connect_error){

        die("Problemas con la conexión a la base de datos");

    }

    else {

        echo "Se ha conectado satisfactoriamente a la BDD" . "<br>" . "<br>";

    }

    $titulo = $_POST['titulo'];
    $descripcio = $_POST['descripcio'];
    $dataInici = $_POST['dataInici'];
    $dataFi = $_POST['dataFi'];
    $estat = $_POST['estat'];

    echo $titulo . "<br>";
    echo $descripcio . "<br>";
    echo $dataInici . "<br>";
    echo $dataFi . "<br>";
    echo $estat . "<br>";

    $sql = "INSERT INTO to_do.tasques(nom_tasques) VALUES ('$titulo')";
    
    
    $mysql->query($sql);    

    /*
    
    $mysql->query("INSERT INTO tasques" . "nom_tasques" . "VALUES" . "($titulo)") or
        die($mysql->error);

    */    

    $mysql->close();
    
?>

