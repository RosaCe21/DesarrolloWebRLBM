<?php
$id = $_GET['id'];
require 'conexion.php';

$consulta = "SELECT*FROM fotos_habitacion WHERE id_habitacion=$id";
$imagenes = mysqli_query($conexion,$consulta);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="agregarImagen.php?id_habitacion=<?php echo $id ?>">Agregar Imagen</a>
    <br><br>
    <?php
        while($fila = mysqli_fetch_assoc($imagenes)){
    ?>
        <img src="images/<?php echo $fila['fotografia'] ?>">
    <?php }
    ?>
</body>
</html>
