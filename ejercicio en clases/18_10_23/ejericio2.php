<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <label for="contrasena">Contrasena: </label>  
    <input type="password" name="contrasena" id="contrasena">
    
    <input id="mostrar" onclick="mostrar()" type="button" value="Mostrar">
    </div>

    <div>
        <table>
            <tr>
                <td onclick="llenar('1')">1</td>
                <td onclick="llenar('2')">2</td>
                <td onclick="llenar('3')">3</td>
            </tr>
            <tr>
                <td onclick="llenar('4')">4</td>
                <td onclick="llenar('5')">5</td>
                <td onclick="llenar('6')">6</td>
            </tr>
            <tr>
                <td onclick="llenar('7')">7</td>
                <td onclick="llenar('8')">8</td>
                <td onclick="llenar('9')">9</td>
            </tr>
            <tr>
            <td onclick="llenar('*')">*</td>    
            <td onclick="llenar('0')">0</td>
                <td onclick="limpiar()">limpiar</td>
                
            </tr>
        </table>

        <script>
            function limpiar(){
                document.getElementById("contrasena").value = "";
            }
            function mostrar(){ 
               if(document.getElementById("contrasena").type == 'password'){
                document.getElementById("contrasena").type = 'text';
                document.getElementById("mostrar").value = 'ocultar';
               }
               else{
                document.getElementById("contrasena").type = "password";
                document.getElementById("mostrar").value = 'mostrar';

               }

            }
            function llenar(valor) {
                document.getElementById("contrasena").value += valor;
                //otra opcion que funciona
                //var x = document.getElementById('contrasena');
                //x.value += valor;
            }

        </script>
    </div>

</body>
</html>