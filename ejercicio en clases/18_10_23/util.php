<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="util">Util</label>
    <input type="text" name="util" id="util">
    <button id="boton">Anadir</button>
    <button id="boton_borrar">Borrar</button>

    <ul id="lista">

    </ul>

    <script>
        document.getElementById("boton").addEventListener('click', function(){
            const elemento = document.createElement("li");
            elemento.innerHTML = document.getElementById('util').value;
            document.getElementById('lista').appendChild(elemento);

        })

        document.getElementById("boton_borrar").addEventListener('click', function(){
            document.getElementById('lista').innerHTML = '';

        })

    </script>

</body>
</html>