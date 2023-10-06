<?php
$id_habitacion = $_GET['id_habitacion'];

?>
<form action="guardarImagen.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_habitacion" value="<?php echo $id_habitacion ?>">
    <label for="fotografia">Fotografia</label>
    <input type="file" name="fotografia">
    <br><br>
    <input type="submit" value="Guardar">
</form>