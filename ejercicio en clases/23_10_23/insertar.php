<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insertar estudiante </h1>
    <form action="crear.php" method="post">
        <label for="paterno">Apellido Paterno: </label>
        <input type="text" name="paterno">
        <br>
        <label for="materno">Apellido Materno: </label>
        <input type="text" name="materno">
        <br>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre">
        <br>

        <input type="submit" value="guardar">
    </form>    

</body>
</html>