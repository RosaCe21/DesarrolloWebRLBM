<?php
$id = $_GET["id"];

require "conexion.php";

$consulta = "SELECT*FROM tipo_habitacion WHERE id=$id";

$tipohabitacion = mysqli_query($conexion,$consulta);


$fila = mysqli_fetch_assoc($tipohabitacion);
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
    <form action="editarTipoHabitacion.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <label for="descripcion">Descripcion de habitacion: </label>
        <input type="text" name="descripcion" value="<?php echo $fila['descripcion']?>" >
        <br>
        <label for="camas">Cantidad de camas: </label>
        <input type="text" name="camas" value="<?php echo $fila['numero_camas']?>"> 
        <br>

        <input type="submit" value="actualizar datos de habitacion">
    </form>    

</body>
</html>