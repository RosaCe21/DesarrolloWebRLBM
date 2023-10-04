include('tipo.php');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Anadir Tipo de Habitacion </h1>
    <form action="crearHabitacion.php" method="post">
        <label for="numero">Numero de la habitacion: </label>
        <input type="text" name="numero">
        <br>
        <label for="tipo">Tipo de habitacion: </label>   
        <select id="tipo" name="tipo">
            <option value="01">Simple</option>
            <option value="02">Doble</option>
            <option value="03">Matrimonial</option>
        </select>
      
        <label for="bano">Cantidad de bano privados: </label>
        <input type="text" name="bano">
        <br>
        <label for="espacio">Espacio: </label>
        <input type="text" name="espacio">
        <br>
        <label for="precio">Precio: </label>
        <input type="text" name="precio">
        <br>
        

        <input type="submit" value="Registrar habitacion">
    </form>    

</body>
</html>
