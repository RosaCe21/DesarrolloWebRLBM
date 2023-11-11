<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
require 'conexion.php';
$iddepartamento = $_GET["iddepartamento"]; 
$consulta = "SELECT id,provincias FROM provincias WHERE iddepartamento=$iddepartamento";
$tipohabitacion = mysqli_query($conexion,$consulta);

if($resultado->nm_rows >0){
?>
        <?php
        while($row = $resultado->fetch_asoc()){
        ?>
        <option value="<? echo $row["id"]?>">
        <?php echo $row["provincia"]?>
        </option>
        <?php }
         }?>
    
</body>
</html>