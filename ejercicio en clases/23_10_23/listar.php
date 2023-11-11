<?php
require 'conexion.php';
$consulta = "SELECT*FROM estudiantes";
$estudiantes = mysqli_query($conexion,$consulta);
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
    <h1>LISTA DE ESTUDIANTES </h1>
    <br>
    <a href="insertar.php" class="enlace">Crear Estudiante</a>
    <br>
    <br>
    <table class="table">
        <tr>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre</th>
            <th>Opciones</th>
        </tr>
        <?php
        while($fila = mysqli_fetch_assoc($estudiantes)){
        ?>
        <tr>
            <td><?php echo $fila['paterno'] ?></td>
            <td><?php echo $fila['materno'] ?></td>
            <td><?php echo $fila['nombre'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $fila['id'] ?>">Editar</a>
                <a href="delete.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<meta http-equiv="refresh" content="1; url=ajax.html">