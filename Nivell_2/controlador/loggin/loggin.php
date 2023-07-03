<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin</title>
</head>
<body>

<?php

    require "../../modelo/config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT usuari.email_usuari, usuari.password_usuari, usuari.idUsuario FROM to_do.usuari WHERE usuari.email_usuari LIKE '$email'" 
            or die($mysql->error);

$dadesLoggin = $mysql->query($sql);

$resultado = mysqli_fetch_array($dadesLoggin);

if (is_null($resultado)){  

    echo "El usuario es incorrecto";

}

else {
                  
    if($password === $resultado[1]){
        
        session_start();

        $idUsuario = $resultado[2];
        $_SESSION["idUsuario"] = $idUsuario;
        header('Location:menu.php');

    }

    else {
       
    echo "La contraseña es incorrecta";
                    
    }

}

?> 

</body>

</html>

