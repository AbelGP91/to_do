<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin</title>
</head>
<body>

<?php

    
    $mysql = new mysqli("localhost","root","","to_do");

    if ($mysql->connect_error){

        die("Problemas con la conexión a la base de datos");

    }

    else {

        echo "Se ha conectado satisfactoriamente a la BDD" . "<br>" . "<br>";

    }

    
/*
    $sql = "SELECT usuari.nom_usuari, cognom1_usuari FROM to_do.usuari" 
            or die($mysql->error);

    $resultado = $mysql->query($sql);
    
    $row = mysqli_fetch_array($resultado);

        echo "<br>";
        var_dump ($row);
        echo "<br>" . "<br>";
        echo $row[0];
        
*/

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) or (empty($password))){

    // echo "Introduce tus credenciales para poder acceder a la BDD";
    header('Location:errorLog.php');

}

else {

    $sql = "SELECT usuari.email_usuari, usuari.password_usuari FROM to_do.usuari WHERE usuari.email_usuari LIKE '$email'" 
            or die($mysql->error);

    $dadesLoggin = $mysql->query($sql);

    $resultado = mysqli_fetch_array($dadesLoggin);

    echo "<br>";

    // var_dump($resultado[0]); -> NULL
    
    // var_dump($resultado[1]); -> NULL
         
    if ($email === $resultado[0]){

        if($password === $resultado[1]){

            header('Location:menu.php');

        }

        else {

            echo "La contraseña es incorrecta";
                
        }

    }

    else { 

        echo "El usuario es incorrecto";
            
    }
    
    }
    





?>  
</body>
</html>

