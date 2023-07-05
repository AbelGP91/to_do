<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasques</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php include "templates/header.php";?>

<body>
    
<?php

session_start();

$id = $_SESSION['idUsuario'];

require "../config.php";

$sql = "SELECT tasques.idTasques,tasques.nom_tasques FROM to_do.tasques WHERE tasques.Usuario_idUsuario LIKE '$id'" 
            or die($mysql->error);

$tasques = $mysql->query($sql);

?>

<table class="flex justify-center items-center mt-20 mb-20">
<tr><th class="border border-slate-700 p-3 bg-blue-500 text-white font-bold rounded mb-20">ID</th><th class="border border-double border-slate-700 bg-blue-500 text-white font-bold rounded mb-20">Descripción</th></tr>

<?php while ($resultado = mysqli_fetch_array($tasques)){


    echo '<tr align="center">';
    echo '<td class="border border-slate-700 rounded-lg p-5 font-bold">';
    echo $resultado['idTasques'];
    echo '</td>';
    echo '<td class="border border-slate-700 rounded-lg p-5">';
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

<div class="flex justify-center items-center border-solid mb-20"> 

    <form class="flex flex-col items-center mb-20" action="../controlador/menu/opcionsTasques.php" name="Tareas" method="post">

        <select name="idTarea" style="margin-left:30px" required>

            <option value="" class="mb-20">  Selecciona una tasca  </option>
                    
            <?php

            $tasquesId = $mysql->query($sql);

            while ($resultadoId = mysqli_fetch_array($tasquesId)){
            
                echo '<option value="' . $resultadoId['idTasques'] . '">' . $resultadoId['idTasques'] . '</option>';
            
            }
            
        $mysql->close();

        ?>

        </select><br><br>

            <div class="flex flex-row">    
            <input type="submit" class="ml-5 py-2 px-5 bg-blue-500 text-white font-bold rounded mb-20" name="veure" value ="Veure"/>
            <input type="submit" class="ml-5 py-2 px-5 bg-blue-500 text-white font-bold rounded mb-20" name="modificar" value ="Modificar"/>
            <input type="submit" class="ml-5 py-2 px-5 bg-blue-500 text-white font-bold rounded mb-20" name="borrar" value ="Borrar" onclick="return confirmacion()"/>
            </div>
            
    </form>

</div>

    <?php include "templates/footer.php";?>

</html>






