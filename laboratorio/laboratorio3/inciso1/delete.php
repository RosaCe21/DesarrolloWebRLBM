<?php 
$id = $_GET["id"];
require "conexion.php";

$consulta = "DELETE FROM tipo_habitacion WHERE id=$id";
mysqli_query($conexion,$consulta);

echo "Tipo de habitacion elimanda correctamente";
?>
<meta http-equiv="refresh" content="1; url=read.php">