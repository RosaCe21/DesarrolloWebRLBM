<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $cantidadLibros = $_POST['cantidadLibros'];
  echo json_encode(['success' => true, 'message' => 'Inserción masiva exitosa']);
}
