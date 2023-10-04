<?php
require 'conexion.php';
$consulta = "SELECT*FROM habitacion";
$habitacion = mysqli_query($conexion,$consulta);
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
    <h1>REGISTRO HABITACIONES </h1>
    <br>
    <a href="create.php" class="enlace">Registrar habitacion</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Numero de Habitacion</th>
            <th>Tipo de Habitacion</th>
            <th>Bano privado</th>
            <th>Espacio</th>
            <th>Precio</th>
            <th>Opciones</th>
            <th>Buscar</th>
           
        </tr>
        <?php
        while($fila = mysqli_fetch_assoc($habitacion)){
        ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['nro'] ?></td>
            <td><?php echo $fila['id_tipo_habitacion'] ?></td>
            <td><?php echo $fila['bano_privado'] ?></td>
            <td><?php echo $fila['espacio'] ?></td>
            <td><?php echo $fila['precio'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $fila['id'] ?>">Editar</a>
                <a href="delete.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
            </td>
            <td>
                <a href="buscar.php?id=<?php echo $fila['id']?>">Buscar</a>
            </td>
            
        </tr>
        
        <?php } ?>
        
    </table>
</body>
</html>