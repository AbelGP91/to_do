<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasques</title>
</head>

<body>
    
<?php

session_start();

$id = $_SESSION['idUsuario'];

require "../modelo/config.php";

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
    echo '</td>';
    echo '</tr>';
    
}

?>

<script>

    function confirmacion(){

        var respuesta = confirm("Segur que vols eliminar la tasca?");
        if (respuesta ==true){

            return true;

        }

        else {

            return false;

        }
    }

</script>

</table>

<br>

<div style="margin:20px 20px 20px 0px"> 

<form action="../controlador/menu/opcionsTasques.php" name="Tareas" method="post">

    <select name="idTarea" style="margin-left:30px" required>

        <option value="" style="">  Selecciona una tasca  </option>
                
        <?php

        $tasquesId = $mysql->query($sql);

        while ($resultadoId = mysqli_fetch_array($tasquesId)){
        
            echo '<option value="' . $resultadoId['idTasques'] . '">' . $resultadoId['idTasques'] . '</option>';
        
        }
           
    $mysql->close();

    ?>
    </select>
    <br><br>
        
    <input style="margin-left:20px" type="submit" name="veure" value ="Veure"/>
    <input type="submit" name="modificar" value ="Modificar"/>
    <input type="submit" name="borrar" value ="Borrar" onclick="return confirmacion()"/>

</form>

</div>

</body>
</html>






