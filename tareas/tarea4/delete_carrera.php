<?php
include("conexion.php");
$id=$_POST['id'];

$sql="DELETE FROM carrera WHERE idcarrera=$id";

if ($con->query($sql) === TRUE) {
    echo "Se elimino el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$con->close()
?>
<meta http-equiv="refresh" content="1; url=read_carrera.php" />