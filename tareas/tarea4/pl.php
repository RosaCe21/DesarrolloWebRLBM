<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número mayor</title>
</head>
<body>
    <div>
        <h2>Número Mayor</h2>
        <div>
            <label for="numero">Introduce un número:</label>
            <input type="number" name="numero" id="numero">
        </div>
        <button id="calcular" onclick="llenar()">Llenar</button>
    </div>

    <div id="elemento">

    </div>

    <script>
        function llenar(){

            var elemento_html = '';
            var numero = parseInt(document.getElementById('numero').value);

            for(var i = 1; i <= numero; i++){
                elemento_html += `<label for="numeros">Introduce el número: ${i}</label>
                <input type="number" name="numeros"><span></span><br>`;
            }
            elemento_html+= '<button onclick="calcularMayor();">Calcula Mayor</button>'
            
            // document.getElementById('elemento');
            document.getElementById('elemento').innerHTML = elemento_html;
        }


        function calcularMayor(){
            var numeros = document.getElementsByName('numeros');

            numeros.forEach((input) => {
                input.style.backgroundColor = '';
                input.nextElementSibling.textContent = '';
            })

            var mayor = numeros[0];
            for(var i = 1; i < numeros.length; i++){

                if(parseInt(numeros[i].value) > parseInt(mayor.value)){
                    mayor = numeros[i];
                }
            }

            console.log(mayor);
            mayor.style.backgroundColor = 'yellow';
            mayor.nextElementSibling.textContent = " Mayor";
        }
    </script>
</body>
</html>