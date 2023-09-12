<?php
include("conexion.php");
$id=$_POST['id'];

$sql="DELETE FROM alumno WHERE idalumno=$id";

if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="1; url=read_alumno.php" />