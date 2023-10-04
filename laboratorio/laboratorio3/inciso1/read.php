<?php
require 'conexion.php';
$consulta = "SELECT*FROM tipo_habitacion";
$tipohabitacion = mysqli_query($conexion,$consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>TIPOS DE HABITACIONES </h1>
    <br>
    <a href="create.php" class="enlace">Anadir tipo de habitacion</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Cantidad de camas</th>
            <th>Opciones</th>
        </tr>
        <?php
        while($fila = mysqli_fetch_assoc($tipohabitacion)){
        ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['descripcion'] ?></td>
            <td><?php echo $fila['numero_camas'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $fila['id'] ?>">Editar</a>
                <a href="delete.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>