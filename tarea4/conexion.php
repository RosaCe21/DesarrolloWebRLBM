<?php
$con = new mysqli("localhost:33067", "root", "", "bd_alumnos");
if ($con->connect_error) {
    die("conexion fallada" . $con->connect_error);
}
?>