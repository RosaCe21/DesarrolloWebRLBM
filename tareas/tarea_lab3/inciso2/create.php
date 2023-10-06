<?php
require 'conexion.php';
$sql2 = "SELECT*FROM tipo_habitacion";
$tipos_habitaciones = mysqli_query($conexion,$sql2); 
?>
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
        <?php
            while($fila = mysqli_fetch_assoc($tipos_habitaciones)){
            ?>
            <option value="<?php echo $fila['id'] ?> "><?php echo $fila['descripcion'] ?></option>
            <?php } ?>
        </select>
      
        <label for="bano">Cuenta con bano privado: </label>
        <select name="bano" >
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select>
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
