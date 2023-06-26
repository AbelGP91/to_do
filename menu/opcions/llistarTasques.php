
<?php

session_start();
$id = $_SESSION['idUsuario'];

$mysql = new mysqli("localhost","root","","to_do");

    if ($mysql->connect_error){

        die("Problemas con la conexión a la base de datos");

    }

    else {

        echo "Se ha conectado satisfactoriamente a la BDD" . "<br>" . "<br>";

    }

$sql = "SELECT tasques.idTasques,tasques.nom_tasques FROM to_do.tasques WHERE tasques.Usuario_idUsuario LIKE '$id'" 
            or die($mysql->error);

$tasques = $mysql->query($sql);

echo '<table class = "tablalistado">';
echo '<tr><th>Código</th><th>Descripción</th></tr>';

while ($resultado = mysqli_fetch_array($tasques)){

    echo '<tr>';
    echo '<td>';
    echo $resultado['idTasques'];
    echo '</td>';
    echo '<td>';
    echo $resultado['nom_tasques'];
    echo '</td>';
    echo '</tr>';

}

echo '<table>';

$mysql->close();

?>
    
    