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

    $email = $_POST['email'];
    $password = $_POST['password'];
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

$sql = "SELECT usuari.email_usuari, usuari.password_usuari FROM to_do.usuari WHERE usuari.email_usuari LIKE '$email'" 
        or die($mysql->error);

$emailUsuari = $mysql->query($sql);

$resultado = mysqli_fetch_array($emailUsuari);

echo "<br>";
echo $resultado[0];

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
    
    

?>  
</body>
</html>

