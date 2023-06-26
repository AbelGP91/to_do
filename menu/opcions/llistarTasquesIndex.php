
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

$mysql->close();

?>

</table>
<br>

<div style="margin-left:10px">
<p>Introdueix el ID de la tasca desitjada</p>
<input type="text" name="idTarea" size="25" value="" required>
</div>

<div style="margin:20px 20px 20px 25px"> <form action="opcionsTasques.php" method="post">

    <input type="submit" name="veure" value ="Veure">
    <input type="submit" name="modificar" value ="Modificar">
    <input type="submit" name="borrar" value ="Borrar">

</div>

