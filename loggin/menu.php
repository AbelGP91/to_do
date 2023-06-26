<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <?php
        session_start();
        echo "ID Usuari = " . $_SESSION["idUsuario"] . "<br><br>"; 
    ?>

    <label for="Menu">Escull l'opció desitjada</label>
    <br><br>
    <button>
        <a href="../menu/opcions/crearTascaIndex.php">Crear Tasca</a>
        <a href="../menu/opcions/llistarTasques.php">Llistar Tasca</a>
    </button>
        
    </select>
    
</body>
</html>