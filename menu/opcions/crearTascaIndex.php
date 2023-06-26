<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Crear Tasca</title>
    <p>CREAR TASCA - PHP</p>
</head>
<body>

    <?php
        session_start();
        echo $_SESSION["idUsuario"];
    ?>
    <form name="ALTA" method="post" action="crearTasca.php">
        <p>Introdueix la tasca</p>
        <input type="text" name="titulo" size="25" value="">
        <p>Introdueix una descripcio</p>
        <input type="text" name="descripcio" id="descripcio">
        <p>Introdueix la data d'inici</p>
        <input type="datetime" name="dataInici" id="dataInici">
        <p>Introdueix la data fi</p>
        <input type="datetime" name="dataFi" id="dataFi">
        <p>Estat</p>
        <input type="text" name="estat">
        <br><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>