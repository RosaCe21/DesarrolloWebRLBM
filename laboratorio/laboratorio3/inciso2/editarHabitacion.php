<?php
$id = $_GET["id"];
$numero = $_GET["numero"];
$tipo = $_GET["tipo"];
$bano = $_GET["bano"];
$espacio = $_GET["espacio"];
$precio = $_GET["precio"];


require "conexion.php";

$consulta = "UPDATE habitacion SET nro = '$numero', id_tipo_habitacion = '$tipo', bano_privado = '$bano', espacio = '$espacio', precio = '$precio' WHERE id=$id";
mysqli_query($conexion,$consulta);

echo "Habitacion actualizada correctamente";

?>
<meta http-equiv="refresh" content="1; url=read.php">