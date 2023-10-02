<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center; background-color: grey; padding: 20px; border: 2px solid yellow;">
        <h2>Convertir Unidades</h2>
        <form method="post" action="">
            <label for="cantidad">Cantidad:</label>
            <input type="text" name="cantidad" id="cantidad" required><br><br>
            
            <label for="unidad_origen">Unidad de Medida:</label>
            <select name="unidad_origen" id="unidad_origen">
                <option value="milimetro">Milímetro</option>
                <option value="centimetro">Centímetro</option>
                <option value="decimetro">Decímetro</option>
                <option value="metro">Metro</option>
                <option value="kilometro">Kilómetro</option>
            </select><br><br>
            
            <label for="unidad_destino">Unidad de Destino:</label>
            <select name="unidad_destino" id="unidad_destino">
                <option value="milimetro">Milímetro</option>
                <option value="centimetro">Centímetro</option>
                <option value="decimetro">Decímetro</option>
                <option value="metro">Metro</option>
                <option value="kilometro">Kilómetro</option>
            </select><br><br>
            
            <input type="submit" name="convertir" value="Convertir">
        </form>
        
        <?php
        if (isset($_POST['convertir'])) {
            $cantidad = floatval($_POST['cantidad']);
            $unidad_origen = $_POST['unidad_origen'];
            $unidad_destino = $_POST['unidad_destino'];

            $conversiones = [
                'milimetro' => 1,
                'centimetro' => 0.1,
                'decimetro' => 0.01,
                'metro' => 0.001,
                'kilometro' => 0.000001,
            ];

            $resultado = $cantidad * ($conversiones[$unidad_destino] / $conversiones[$unidad_origen]);

            echo "<p>Resultado: $cantidad $unidad_origen es igual a $resultado $unidad_destino.</p>";
        }
        ?>
    </div>
</body>
</html>
