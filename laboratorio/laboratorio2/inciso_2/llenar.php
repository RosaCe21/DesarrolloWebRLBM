<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $arreglo = $_POST["arreglo"];
    $arregloNumeros = explode(",", $arreglo);
    
    header("Location: eliminar.php?numero=$numero&arreglo=" . urlencode($arreglo));
    exit;
}
?>
