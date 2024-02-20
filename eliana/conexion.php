<?php
$usuario = 'root';
$namebd = "tests";
$contrasena = "rosa21";
$servidor = "localhost";

$conexion = mysqli_connect($servidor,$usuario,$contrasena,$namebd);
if(!$conexion){
    echo 'conexion fallida';
}

?>