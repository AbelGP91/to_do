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
        <input type="text" name="titulo" size="25" value="" required>
        <p>Introdueix una descripcio</p>
        <input type="text" name="descripcio" id="descripcio" required>
        <p>Introdueix la data d'inici</p>
        <input type="date" name="dataInici" id="dataInici" required>
        <p>Introdueix la data fi</p>
        <input type="date" name="dataFi" id="dataFi">
        <p>Estat (escull l'opció desitjada):</p>
        <input list = "estados" name = "estat" id = "estat" required>
        <datalist id="estados">
            <option> Pendent </option>
            <option> En execució </option>
            <option> Acabada </option>
        </datalist>    
        <!-- <input type="text" name="estat" required> -->
        <br><br>
        <input type="submit" value="Confirmar">
    </form>
</body>
</html>