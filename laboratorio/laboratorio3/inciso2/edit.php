<?php
$id = $_GET["id"];

require "conexion.php";

$consulta = "SELECT*FROM habitacion WHERE id=$id";

$habitacion = mysqli_query($conexion,$consulta);


$fila = mysqli_fetch_assoc($habitacion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar Tipo Habitacion </h1>
    <form action="editarHabitacion.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <label for="numero">Numero de habitacion: </label>
        <input type="text" name="numero" value="<?php echo $fila['nro']?>" >
        <br>
        <label for="tipo">Tipo de habitacion: </label>   
        <select id="tipo" name="tipo" value="<?php echo $fila['id_tipo_habitacion']?>">
            <option value="01">Simple</option>
            <option value="02">Doble</option>
            <option value="03">Matrimonial</option>
        </select>
        <br>
        <label for="bano">Cantidad de banos privados: </label>
        <input type="text" name="bano" value="<?php echo $fila['bano_privado']?>"> 
        <br>
        <label for="espacio">Espacio: </label>
        <input type="text" name="espacio" value="<?php echo $fila['espacio']?>"> 
        <br>
        <label for="precio">Precio de la habitacion: </label>
        <input type="text" name="precio" value="<?php echo $fila['precio']?>"> 
        <br>

        <input type="submit" value="actualizar datos de habitacion">
    </form>    

</body>
</html>