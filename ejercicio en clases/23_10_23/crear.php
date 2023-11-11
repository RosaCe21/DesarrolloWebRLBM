<?php
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$nombre = $_POST['nombre'];

require 'conexion.php';

$consulta="INSERT INTO estudiantes(paterno,materno,nombre) VALUES('$paterno','$materno','$nombre')";

mysqli_query($conexion,$consulta);

echo "Estudiante creado correctamente";

?>

<meta http-equiv="refresh" content="1; url=ajax.html">