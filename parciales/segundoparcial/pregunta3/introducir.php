<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $n = isset($_POST["n"]) ? intval($_POST["n"]) : 0;
  for ($i = 1; $i <= $n; $i++) {
    echo '<label for="numero' . $i . '">Número ' . $i . ':</label>';
    echo '<input type="number" class="numero" id="numero' . $i . '" />';
  }
} else {
  echo "Error: Acceso no permitido.";
}
?>
