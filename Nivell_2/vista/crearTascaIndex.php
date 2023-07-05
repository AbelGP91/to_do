<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Crear Tasca</title>    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php include "./templates/header.php";?>

    <?php
        session_start();
        // echo $_SESSION["idUsuario"];
    ?>
   
   <div class="flex justify-center items-center h-screen bg-gray-100"> 
        <form name="ALTA" method="post" action="../controlador/menu/crearTasca.php" class="text-center rounded bg-gray-100 -mt-20 -mb-20 focus:outline-none focus:border-blue-500">
            <p class="font-bold mb-2">Introdueix la tasca</p>
            <input type="text" name="titulo" size="25" value="" class="w-full px-3 py-2 rounded mb-7 border border-gray-300 focus:outline-none focus:border-blue-500" required>
            <p class="font-bold mb-2">Introdueix una descripcio</p>
            <input type="text" name="descripcio" id="descripcio" class="w-full px-3 py-2 rounded mb-7 border border-gray-300 focus:outline-none focus:border-blue-500" required>
            <p class="font-bold mb-2">Introdueix la data d'inici</p>
            <input type="date" name="dataInici" id="dataInici" class="w-full px-3 py-2 rounded mb-7 border border-gray-300 focus:outline-none focus:border-blue-500" required>
            <p class="font-bold mb-2">Introdueix la data fi</p>
            <input type="date" name="dataFi" id="dataFi" class="w-full px-3 py-2 rounded mb-7 border border-gray-300 focus:outline-none focus:border-blue-500">
            <p class="font-bold mb-2">Estat (escull l'opció desitjada):</p>
            <input list = "estados" name = "estat" id = "estat" class="w-full px-3 py-2 rounded mb-2 border border-gray-300 focus:outline-none focus:border-blue-500" required>
            <datalist id="estados">
                <option> Pendent </option>
                <option> En execució </option>
                <option> Acabada </option>
            </datalist>    
            <br><br>
            <input type="submit" value="Confirmar" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
        </form>
    </div>
    <?php include "./templates/footer.php";?>

</body>
</html>