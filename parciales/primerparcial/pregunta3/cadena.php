<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Comprobando</h1>
    <?php
    $cadena1 = $_POST['cadena1'];
    $cadena2 = $_POST['cadena2'];


    if (strpos($cadena1, $cadena2) !== false) {
        echo $cadena1 . " tiene la palabra " . $cadena2 . "<br> <br>";
       $cadena1 = str_replace($cadena2, '', $cadena1);
        echo "Cadena1 sin la palabra " . $cadena2 . ": " . $cadena1;
    } else {
        echo $cadena1 . " no contiene la palabra " . $cadena2;
    }
    ?>
</body>
</html>
