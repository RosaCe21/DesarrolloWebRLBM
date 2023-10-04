<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Anadir Tipo de Habitacion </h1>
    <form action="crearTipoHabitacion.php" method="post">
        <label for="descripcion">Descripcion de la habitacion: </label>
        <input type="text" name="descripcion">
        <br>
        <label for="camas">Cantidad de camas: </label>
        <input type="text" name="camas">
        <br>

        <input type="submit" value="Registrar tipo de habitacion">
    </form>    

</body>
</html>
