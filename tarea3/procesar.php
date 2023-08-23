<!DOCTYPE html>
<html lang="en">
<head>
    <title>Procesar Cadena</title>
</head>
<body>
    <h1>Palabra más larga</h1>
    
    <form action="procesar.php" method="post">
        <label for="cadena">Ingresa una cadena de palabras:</label><br>
        <input type="text" name="cadena" id="cadena" required><br><br>
        <input type="submit" value="Procesar">
    </form>

    <?php
    function PalabraMasLarga($cadena) {
    $palabras = explode(" ", $cadena);
    $palabraMasLarga = '';

    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) {
            $palabraMasLarga = $palabra;
        }
    }

    return $palabraMasLarga;
}
Puedes utilizar esta función en tu código para encontrar la palabra más larga en una cadena dada. Por ejemplo:

php
Copy code
$cadena = "Hola amigos del mundo";
$palabraMasLarga = PalabraMasLarga($cadena);
echo "La palabra más larga es: $palabraMasLarga";
En este ejemplo, la cadena es "Hola amigos del mundo", y la palabra más larga es "amigos". La función PalabraMasLarga te devolverá "amigos".







        return $palabraMasLarga;
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST["cadena"];
        $palabraMasLarga = PalabraMasLarga($cadena);

        echo "<p>La palabra más larga es: $palabraMasLarga</p>";
    }
    ?>
</body>
</html>