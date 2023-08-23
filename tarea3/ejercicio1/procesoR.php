<?php
require_once 'funcion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cadena = $_POST['cadena'];

    $palabraMasLarga = PalabraMasLarga($cadena);

    echo "La palabra más larga es: $palabraMasLarga";
}
?>