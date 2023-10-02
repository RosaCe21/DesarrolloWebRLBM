<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['numero'])) {
        $tamanio = intval($_POST['numero']);
        
        if ($tamanio >= 1 && $tamanio <= 20) {
            echo "<style>
                    .casilla {
                        width: 35px;
                        height: 35px;
                        display: inline-block;
                    }
                    .blanca {
                        background-color: pink;
                    }
                    .negra {
                        background-color: white;
                    }
                  </style>";

            echo "<h2>Tablero de ajedrez $tamanio x $tamanio:</h2>";
            echo "<div>";
            
            for ($fila = 0; $fila < $tamanio; $fila++) {
                for ($columna = 0; $columna < $tamanio; $columna++) {
                    $esBlanca = ($fila + $columna) % 2 == 0;
                    $claseCasilla = $esBlanca ? 'blanca' : 'negra';
                    echo "<div class='casilla $claseCasilla'></div>";
                }
                echo "<br>";
            }

            echo "</div>";
        } else {
            echo "El número debe estar entre 1 y 20.";
        }
    }
}
?>