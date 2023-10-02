<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<h2>Tablero de Damas</h2>
    <?php
    $filas = 6;
    $columnas = 5;
    $color = "rosado";

    echo "<table>";

    for ($i = 1; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $columnas; $j++) {
            $clase = ($i + $j) % 2 === 0 ? "blanco" : "negro";
            if ($color === "rosado") {
                $clase = "rosado";
            }

            echo "<td class='$clase'>$i-$j</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>

