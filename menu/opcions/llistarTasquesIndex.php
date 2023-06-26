
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

?>

<h1>Llistat de Tasques</h1>

<?php

echo '<table class = "tablalistado" border="3" width="250px"';
echo '<tr><th>ID</th><th>Descripción</th></tr>';


while ($resultado = mysqli_fetch_array($tasques)){

    echo '<tr align="center">';
    echo '<td>';
    echo $resultado['idTasques'];
    echo '</td>';
    echo '<td>';
    echo $resultado['nom_tasques'];
    // echo '<button type="button">Modificar</button>' . '<button type="button">Eliminar</button>';
    echo '</td>';
    echo '</tr>';
    
}

echo '</table>';
echo "<br>";

echo '<div style="margin-left:10px"';
echo '<p>Introdueix el Id de la tasca desitjada</p>';
echo '<input type="text" name="idTarea" size="25" value="" required>';
echo '</div>';

echo '<div style="margin:20px 20px 20px 25px">';
echo '<button type="button" onclick="">Ver</button>  <button type="button" onclick="">Modificar</button>  <button type="button" onclick="">Eliminar</button>';
echo '</div>';

$mysql->close();

?>

