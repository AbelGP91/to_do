<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <form name="MODIFICAR" method="post" action="../menu/modificarTasques.php">

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

</body>
</html>

