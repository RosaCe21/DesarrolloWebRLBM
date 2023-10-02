<?php
function eliminar_mayores($arreglo, $numero) {
    $resultados = array();
    foreach ($arreglo as $valor) {
        if ($valor <= $numero) {
            $resultados[] = $valor;
        }
    }
    return $resultados;
}

if (isset($_GET["numero"]) && isset($_GET["arreglo"])) {
    $numero = intval($_GET["numero"]);
    $arreglo = explode(",", $_GET["arreglo"]);
    
    $resultado = eliminar_mayores($arreglo, $numero);

    echo "<h1>Resultado:</h1>";
    echo "Arreglo original: " . implode(", ", $arreglo) . "<br>";
    echo "Número mayor: $numero<br>";
    echo "Arreglo modificado: " . implode(", ", $resultado) . "<br>";
} else {
    echo "Faltan datos para realizar la eliminación.";
}
?>


