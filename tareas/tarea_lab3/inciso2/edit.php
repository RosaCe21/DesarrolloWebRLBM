<?php
$id = $_GET["id"];

require "conexion.php";

$consulta = "SELECT*FROM habitacion WHERE id=$id";
$habitacion = mysqli_query($conexion,$consulta);

$fila = mysqli_fetch_assoc($habitacion);

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
    <h1>Actualizar Tipo Habitacion </h1>
    <form action="editarHabitacion.php" method="get">
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <label for="numero">Numero de habitacion: </label>
        <input type="text" name="numero" value="<?php echo $fila['nro']?>" >
        <br>
        <label for="tipo">Tipo de habitacion: </label>   
        <select id="tipo" name="tipo">
        <?php
            while($tipo = mysqli_fetch_assoc($tipos_habitaciones)){
                if($tipo['id'] == $fila['id_tipo_habitacion']){
        ?>
                    <option value="<?php echo $tipo['id'] ?> " selected><?php echo $tipo['descripcion'] ?></option>
        <?php
                }
                else{
        ?>
                    <option value="<?php echo $tipo['id'] ?> " ><?php echo $tipo['descripcion'] ?></option>
        <?php
                }
        ?>
        <?php
         } 
        ?>
        </select>
        <br>
        <label for="bano">Cuenta con banos privados: </label>
        <select name="bano" >
            <?php if($fila['bano_privado']==1){
                ?> 
                <option value="1" selected>SI</option>
                <option value="0" >NO</option>
                <?php 
            } else {
                ?> 
                <option value="1" >SI</option>
                <option value="0" selected>NO</option>
                <?php
            }
            ?>
        </select>
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