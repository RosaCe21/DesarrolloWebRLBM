<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <label for="tamano">Inserte un numero: </label>
            <input type="number" name="tamano" id="tamano"><br>
        </div>
        <button id="calcular" onclick="llenar()">Llenar</button>
    </div>

    <div id="elemento">

</div>

     <script>
       function llenar(){
            var n = parseInt(document.getElementById("tamano").value);
                var htmml = '';
                for (var i = 1; i <= n; i++) {
                    html+=`<input type="number" name="numeros"><br>`;
                }
                html+='<button onclick="calcularMayor();"> Calcular Mayor </button>'
                document.getElementById('elemento').innerHTML = html;
        }

    function calcularMayor(){
       var numeros = document.getElementsByName("numeros");
       // mayor = numeros[0];
        //for(i=1;i<numeros.length;i++){}
        for(var i = 1; i < numeros.length; i++){
                if(parseInt(numeros[i].value) > parseInt(numeros[i-1].value)){
                    numeros[i].style.background = 'yellow';
                }else{
                    numeros[i].style.background = 'white';
                }
            }
    }
        
</script>
</body>
</html>
