<?php
include("conexion.php");

$id=$_POST['id'];
$nombre=$_POST['nombre'];

$sql="UPDATE carrera set nombre='$nombre' WHERE idcarrera=$id ";

if ($con->query($sql) === TRUE) {
    echo "Se actualizo el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="1; url=read_carrera.php" />