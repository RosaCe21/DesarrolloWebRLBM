<?php
$descripcion = $_POST['descripcion'];
$camas = $_POST['camas'];

require 'conexion.php';

$consulta="INSERT INTO tipo_habitacion(descripcion,numero_camas) VALUES('$descripcion','$camas')";

mysqli_query($conexion,$consulta);

echo "Tipo de habitacion anadida correctamente";

?>

<meta http-equiv="refresh" content="1; url=read.php">
?>