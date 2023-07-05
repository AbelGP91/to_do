
<script src="https://cdn.tailwindcss.com"></script>

<?php

function veureTasques($idTarea){

    $id = $_SESSION['idUsuario'];

    require "../../config.php";
        
    $sql = "SELECT tasques.idTasques, tasques.nom_tasques, tasques.descrip_tasques, tasques.estat_tasques, tasques.inici_tasques, tasques.fi_tasques, tasques.Usuario_idUsuario 
            FROM to_do.tasques WHERE tasques.idTasques LIKE '$idTarea'
            " 
            or die($mysql->error);

    $tasques = $mysql->query($sql);
        
    $resultado = mysqli_fetch_array($tasques);

    if(isset($resultado['Usuario_idUsuario'])){
       
        if($resultado['Usuario_idUsuario']===$id){
                        
            ?>

            <?php include "../../vista/templates/header.php";?>
            
            <?php

            echo '<table class="flex h-screen justify-center items-center -mt-20"';
            echo '<tr><th class="border border-slate-700 p-3 bg-blue-500 text-white font-bold">ID</th><th class="border border-slate-700 p-3 bg-blue-500 text-white font-bold">Nom</th><th class="border border-slate-700 p-3 bg-blue-500 text-white font-bold">Descripció</th><th class="border border-slate-700 p-3 bg-blue-500 text-white font-bold">Estat</th><th class="border border-slate-700 p-3 bg-blue-500 text-white font-bold">Data Inici</th><th class="border border-slate-700 p-3 bg-blue-500 text-white font-bold">Data fi</th></tr>';

            echo '<tr align="center">';
            echo '<td class="border border-slate-700 rounded-lg p-5 font-bold">';
            echo $resultado['idTasques'];
            echo '</td>';
            echo '<td class="border border-slate-700 rounded-lg p-5">';
            echo $resultado['nom_tasques'];
            echo '</td>';
            echo '<td class="border border-slate-700 rounded-lg p-5">';
            echo $resultado['descrip_tasques'];
            echo '</td>';
            echo '<td class="border border-slate-700 rounded-lg p-5">';
            echo $resultado['estat_tasques'];
            echo '</td>';
            echo '<td class="border border-slate-700 rounded-lg p-5">';
            echo $resultado['inici_tasques'];
            echo '</td>';
            echo '<td class="border border-slate-700 rounded-lg p-5">';
                        
                if($resultado['fi_tasques']==="0000-00-00 00:00:00"){

                    $resultado['fi_tasques'] = "-";

                }

            echo $resultado['fi_tasques'];
            echo '</td>';
            echo '</tr>';

        }
        
        echo '</table>';   
        
        include "../../vista/templates/footer.php";

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

    

    



        



    
    
    

    
    
    
    
    




