
<?php

// $id = $_SESSION['idUsuario'];

function veureTasques($idTarea){

    $id = $_SESSION['idUsuario'];

    $mysql = new mysqli("localhost","root","","to_do");
    
    $sql = "SELECT tasques.idTasques, tasques.nom_tasques, tasques.descrip_tasques, tasques.estat_tasques, tasques.inici_tasques, tasques.fi_tasques, tasques.Usuario_idUsuario 
            FROM to_do.tasques WHERE tasques.idTasques LIKE '$idTarea'
            " 
            or die($mysql->error);

    $tasques = $mysql->query($sql);
        
    $resultado = mysqli_fetch_array($tasques);

    if(isset($resultado['Usuario_idUsuario'])){

   // while ($resultado = mysqli_fetch_array($tasques)){

        // print_r($resultado);
        
        if($resultado['Usuario_idUsuario']===$id){
            
            // echo $id . " = " . $resultado['Usuario_idUsuario'];

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
            
            // var_dump($resultado['fi_tasques']);

                if($resultado['fi_tasques']==="0000-00-00 00:00:00"){

                    $resultado['fi_tasques'] = "-";

                }

            echo $resultado['fi_tasques'];
            echo '</td>';
            echo '</tr>';

        }

        /*

        else{

            echo "El ID introducido no corresponde a ninguna tarea";
        
        }

        */

        echo '</table>';     

    }

    /*

    else{

        echo "El ID introducido no corresponde a ninguna tarea";

    }

    */
    
        return $resultado;
        $mysql->close();
                
}

function modificarTasques($idTarea){
    
    $resultado = veureTasques($idTarea);

    // print_r($resultado);

    $id = $_SESSION['idUsuario'];
    
    if(isset($resultado['Usuario_idUsuario'])){

        if($resultado['Usuario_idUsuario']===$id){

    ?>

    <form name="MODIFICAR" method="post" action="modificarTasques.php">

    <p>Actualitzar nom</p>
    <input type="text" name="titulo" size="25" value="">
    <p>Actualitzar descripció</p>
    <input type="text" name="descripcio" id="descripcio" value="">
    <p>Actualitzar data inici</p>
    <input type="date" name="dataInici" id="dataInici" value="">
    <p>Actualitzar data fi </p>
    <input type="date" name="dataFi" id="dataFi" value="">
    <p>Actualitzar estat</p>
    <input list = "estados" name = "estat" id = "estat" value="">
    <datalist id="estados">
        <option> Pendent </option>
        <option> En execució </option>
        <option> Acabada </option>
    </datalist>
    <input type="hidden" name="idTarea" value='<?php echo "$idTarea";?>'> 
    <br><br>
    <input type="submit" value="Confirmar">

    </form>

<?php

        }
    
    }
         
}
    
function borrarTasques($idTarea){

    $resultado = veureTasques($idTarea);

    // print_r($resultado);

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



        



    
    
    

    
    
    
    
    




