<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php
        include "../../vista/templates/header.php";
        session_start();
        // echo "ID Usuari = " . $_SESSION["idUsuario"] . "<br><br>"; 
    ?>
<main class="flex justify-center items-center h-screen">
    <div class= " flex flex-col items-center">
        
            <label class="bg-gray-200 py-2 px-4 rounded font-bold -mb-7" for="Menu">ESCULL L'OPCIÓ DESITJADA</label>
        
    
    <br><br>
    <div class= "flex flex-row items-center gap-2"> 
    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
        <a href="../../vista/crearTascaIndex.php">Crear Tasca</a>
    </button>
    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
        <a href="../../vista/llistarTasquesIndex.php">Llistar Tasca</a>
    </button>
</div>
</main>
    
    <?php include "../../vista/templates/footer.php";?>

</body>
</html>