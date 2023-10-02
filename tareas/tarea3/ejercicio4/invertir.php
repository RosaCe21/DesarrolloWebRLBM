<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cadena'])) {
        $cadena = $_POST['cadena'];
        $cadenaInvertida = strrev($cadena);
        
        echo "Cadena original: $cadena <br>";
        echo "Cadena invertida: $cadenaInvertida";
    }
}
?>