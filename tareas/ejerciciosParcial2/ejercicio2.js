function cargarContenido() {
    var contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest();
    ajax.open("GET", 'tabla.html', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200) {
            contenedor.innerHTML = ajax.responseText;
        }
    };
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}


function mostrarResultado() {
    var num1 = parseFloat(document.getElementById('numero1').value);
    var num2 = parseFloat(document.querySelector('input[name="operacion"]:checked').value);

    if (isNaN(num1) || num1 >= 10) {
        alert("Ingresa un número válido menor a 10 en el primer cuadro.");
        return;
    }
    var resultado = num1 * num2;
    document.getElementById('Resultado').innerText = 'Resultado: ' + resultado;
}