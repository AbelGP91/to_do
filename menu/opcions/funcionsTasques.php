
<?php

// $id = $_SESSION['idUsuario'];

function veureTasques($idTarea){

    $id = $_SESSION['idUsuario'];

    $mysql = new mysqli("localhost","root","","to_do");

    /*

    if ($mysql->connect_error){

        die("Problemas con la conexión a la base de datos");

    }

    else {

        echo "Se ha conectado satisfactoriamente a la BDD" . "<br>" . "<br>";

    }

    */

    // echo $idTarea;

    $sql = "SELECT tasques.idTasques, tasques.nom_tasques, tasques.descrip_tasques, tasques.estat_tasques, tasques.inici_tasques, tasques.fi_tasques, tasques.Usuario_idUsuario 
            FROM to_do.tasques WHERE tasques.idTasques LIKE '$idTarea'
            " 
            or die($mysql->error);

    $tasques = $mysql->query($sql);

    // AND tasques.Usuario_idUsuario LIKE '$id'
    ?>

    <h1>Llistat de tasques</h1>
    
<?php
    
    echo '<table class = "tablalistado" border="3" width="800px"';
    echo '<tr><th>ID</th><th>Nom</th><th>Descripció</th><th>Estat</th><th>Data Inici</th><th>Data fi</th></tr>';

    $resultado = mysqli_fetch_array($tasques);

    if(isset($resultado['Usuario_idUsuario'])){

   // while ($resultado = mysqli_fetch_array($tasques)){

        // print_r($resultado);
        
        if($resultado['Usuario_idUsuario']===$id){
            
            // echo $id . " = " . $resultado['Usuario_idUsuario'];

            echo '<tr align="center">';
            echo '<td>';
            echo $resultado['idTasques'];
            echo '</td>';
            echo '<td>';
            echo $resultado['nom_tasques'];
            echo '</td>';
            echo '<td>';
            echo $resultado['descrip_tasques'];
            echo '</td>';
            echo '<td>';
            echo $resultado['estat_tasques'];
            echo '</td>';
            echo '<td>';
            echo $resultado['inici_tasques'];
            echo '</td>';
            echo '<td>';
            
            // var_dump($resultado['fi_tasques']);

                if($resultado['fi_tasques']==="0000-00-00 00:00:00"){

                    $resultado['fi_tasques'] = "-";

                }

            echo $resultado['fi_tasques'];
            echo '</td>';
            echo '</tr>';

        }

        echo '</table>';

    }

    else{

        echo "Selecciona una ID de tu lista de tareas";

    }

        $mysql->close();
                
    }
    
    // echo '</table>';

    // $mysql->close();

// }

    
    
    ?>
    
    




