<?php
require 'conexion.php';
$id_habitacion = $_POST['id_habitacion'];
$archivo_original = $_FILES['fotografia']['name'];
$arreglo = explode(".", $archivo_original);
$extension = $arreglo[1];
$fotografia = uniqid() . '.' . $extension;

copy($_FILES['fotografia']['tmp_name'], 'images/' . $fotografia);

$consulta = "INSERT INTO fotos_habitacion(id_habitacion, fotografia) values('$id_habitacion', '$fotografia')";

$respuesta = $conexion->query($consulta);
echo "Imagenes guardada correctamente";

?>

<meta http-equiv="refresh" content="1; url=imagenes.php?id=<?php echo $id_habitacion ?>">