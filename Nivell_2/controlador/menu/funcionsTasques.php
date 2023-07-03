
<?php

function veureTasques($idTarea){

    $id = $_SESSION['idUsuario'];

    require "../../modelo/config.php";
        
    $sql = "SELECT tasques.idTasques, tasques.nom_tasques, tasques.descrip_tasques, tasques.estat_tasques, tasques.inici_tasques, tasques.fi_tasques, tasques.Usuario_idUsuario 
            FROM to_do.tasques WHERE tasques.idTasques LIKE '$idTarea'
            " 
            or die($mysql->error);

    $tasques = $mysql->query($sql);
        
    $resultado = mysqli_fetch_array($tasques);

    if(isset($resultado['Usuario_idUsuario'])){
       
        if($resultado['Usuario_idUsuario']===$id){
                        
            ?>

            <h1>Llistat de tasques</h1>

            <?php

            echo '<table class = "tablalistado" border="3" width="800px"';
            echo '<tr><th>ID</th><th>Nom</th><th>Descripció</th><th>Estat</th><th>Data Inici</th><th>Data fi</th></tr>';

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
                        
                if($resultado['fi_tasques']==="0000-00-00 00:00:00"){

                    $resultado['fi_tasques'] = "-";

                }

            echo $resultado['fi_tasques'];
            echo '</td>';
            echo '</tr>';

        }
        
        echo '</table>';     

    }
        
        return $resultado;
        $mysql->close();
                
}

function modificarTasques($idTarea){
    
    $resultado = veureTasques($idTarea);
    
    $id = $_SESSION['idUsuario'];
    
    if(isset($resultado['Usuario_idUsuario'])){

        if($resultado['Usuario_idUsuario']===$id){
   
            require "../../vista/modificarTascaIndex.php";
  
        }
    
    }
         
}
    
function borrarTasques($idTarea){

    $resultado = veureTasques($idTarea);
    
    $id = $_SESSION['idUsuario'];
    
    if(isset($resultado['Usuario_idUsuario'])){

        if($resultado['Usuario_idUsuario']===$id){

            $mysql = new mysqli("localhost","root","","to_do");
    
            $sql = "DELETE FROM to_do.tasques WHERE idTasques='$idTarea'" 
            or die($mysql->error);

            $tasques = $mysql->query($sql);

            echo "<br>";
            echo "Se ha eliminado la tarea de la Base de Datos";

        }

    }
  
}

    ?>



        



    
    
    

    
    
    
    
    




