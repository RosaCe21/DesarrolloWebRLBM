<?php
require 'conexion.php';
if(isset($_GET['buscar'])){
    $buscar_id = $_GET['buscar'];
    $consulta = "SELECT h.*,t.descripcion FROM habitacion h INNER JOIN tipo_habitacion t ON h.id_tipo_habitacion=t.id 
    WHERE h.id_tipo_habitacion=$buscar_id";
    $habitacion = mysqli_query($conexion,$consulta);
}
else{
    $consulta = "SELECT h.*,t.descripcion FROM habitacion h INNER JOIN tipo_habitacion t ON h.id_tipo_habitacion=t.id";
    $habitacion = mysqli_query($conexion,$consulta);
}

$sql2 = "SELECT*FROM tipo_habitacion";
$tipos_habitaciones = mysqli_query($conexion,$sql2); 
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
    <br><br>
    <form action="" method="get">
    <label for="buscar">Buscar por tipo de habitacion</label>
    <select name="buscar">
    <?php
        while($fila = mysqli_fetch_assoc($tipos_habitaciones)){
        ?>
        <option value="<?php echo $fila['id'] ?> "><?php echo $fila['descripcion'] ?></option>
        <?php } ?>
    </select> 
    
    <input type="submit" value="buscar">

    </form>
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
           
        </tr>
        <?php
        while($fila = mysqli_fetch_assoc($habitacion)){
        ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['nro'] ?></td>
            <td><?php echo $fila['descripcion'] ?></td>
            <td><?php if($fila['bano_privado']==1){echo 'SI';}else{echo 'NO';}?></td>
            <td><?php echo $fila['espacio'] ?></td>
            <td><?php echo $fila['precio'] ?></td>
            <td>
                <a href="edit.php?id=<?php echo $fila['id'] ?>">Editar</a>
                <a href="delete.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
                <a href="imagenes.php?id=<?php echo $fila['id'] ?>">Imagenes</a>
            </td>
            
        </tr>
        
        <?php } ?>
        
    </table>
</body>
</html>