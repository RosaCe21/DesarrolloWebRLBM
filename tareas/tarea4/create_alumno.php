<?php
include("conexion.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cu=$_POST['cu'];

$sql="INSERT INTO alumno(nombre,apellido,cu) values ('$nombre', '$apellido','$cu') ";

if ($con->query($sql) === TRUE) {
    echo "Se creo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>

<meta http-equiv="refresh" content="1; url=read_alumno.php" />