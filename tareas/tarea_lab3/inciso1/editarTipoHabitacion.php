<?php
$id = $_GET["id"];
$descripcion = $_GET["descripcion"];
$camas = $_GET["camas"];


require "conexion.php";

$consulta = "UPDATE tipo_habitacion SET descripcion = '$descripcion', numero_camas = '$camas' WHERE id=$id";
mysqli_query($conexion,$consulta);

echo "El tipo de habitacion fue actualizado correctamente";

?>
<meta http-equiv="refresh" content="1; url=read.php">