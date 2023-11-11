<?php
$usuario = 'root';
$namebd = "escuela";
$contrasena = "";
$servidor = "localhost:33066";

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$namebd);
if(!$conexion){
    echo 'conexion fallida';
}

?>