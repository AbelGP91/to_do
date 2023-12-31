<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin_Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php include "vista/templates/header.php"; ?>
    
    <main class="flex justify-center items-center h-screen">
        <form class="bg-blue-500 p-4 rounded-lg shadow-md -mt-5"action="controlador/loggin/loggin.php" name = "loggin" method="post">
            <p class="text-white -mb-5 font-bold">Introdueix el teu email</p><br>
            <input class="w-full px-3 py-2 rounded-sm mb-3" type="text" name="email" id="email" required>
            <p class="text-white -mb-5 font-bold" >Introdueix el teu password</p> <br>
            <input class="w-full px-3 py-2 rounded-sm" type="password" name="password" id="password" required><br><br>
            <input class="w-full bg-white text-blue-500 font-bold py-2 px-4 rounded" type="submit" value="Enviar">
        </form>
    </main>

    <?php include "vista/templates/footer.php";?>
              
</body>

<footer></footer>

</html>


