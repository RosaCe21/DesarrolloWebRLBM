<?php
include("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cu=$_POST['cu'];

$sql="UPDATE  alumno set nombre='$nombre', apellido='$apellido', CU='$cu' WHERE  idalumno=$id ";

if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="1; url=read_alumno.php" />