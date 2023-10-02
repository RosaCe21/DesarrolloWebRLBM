<?php
$filas = $_GET['filas'];
$columnas = $_GET['columnas'];
$color = $_GET['color'];

echo "<h2>Tablero de " . $filas . " X " . $columnas . "</h2>";
echo "<table border='1'>";              
for ($i = 1; $i <= $filas; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $columnas; $j++) {
        $colorCelda = 'white';
        if (($i + $j) % 2 == 0) {
            $colorCelda = $color;
        }
        echo "<td style='width: 30px; height: 30px; background-color: $colorCelda'></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>