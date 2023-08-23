<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Generar el arreglo de números del 1 al 20
$num = range(1, 20);

// Arreglos para números pares e impares
$Pares = array();
$Impares = array();

// Separar los números en arreglos diferentes
foreach ($num as $numero) {
    if ($numero % 2 == 0) {
        $Pares[] = $numero;
    } else {
        $Impares[] = $numero;
    }
}

// Imprimir los arreglos
echo "Números pares: ";
print_r($Pares);?>
<br>
<?php
echo "Números impares: ";
print_r($Impares);
?>
</body>
</html>
