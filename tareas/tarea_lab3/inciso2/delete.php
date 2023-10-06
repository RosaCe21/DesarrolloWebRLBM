<?php 
$id = $_GET["id"];
require "conexion.php";

$consulta = "DELETE FROM habitacion WHERE id=$id";
mysqli_query($conexion,$consulta);

echo "Habitacion elimanda correctamente";
?>
<meta http-equiv="refresh" content="1; url=read.php">