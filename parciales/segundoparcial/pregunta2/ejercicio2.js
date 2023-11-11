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
    var num1 = parseFloat(document.getElementById('filas').value);
    var num2 = parseFloat(document.getElementById('numero').value);
    var oper = parseFloat(document.querySelector('input[name="operacion"]:checked').value);

   for(i=1;i<=num1;i++){
   
    if(oper == 1){
        var resultado = i + num2;
    
    }
    else {
        var resultado = num1 - num2;
   } 
}
    document.getElementById('Resultado').innerText = 'Resultado: ' + resultado;
}