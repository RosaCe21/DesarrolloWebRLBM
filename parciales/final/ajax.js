
var titulo = document.getElementById("titulo");
var contenido = document.getElementById("contenido");
var submenu = document.getElementById("submenu");
var pie = document.getElementById("pie");

function cargarPregunta2() {
    document.getElementById('submenu').innerHTML =
        `<form method="get" id="form1">   
    <label>Elija una operacion por favor: </label>
    <select name="operacion" id="operacion">Operaciones
        <option value="1">Suma</option>
        <option value="2">Resta</option>
        <option value="3">Multiplicacion</option>
        <option value="4">Division</option>
    </select> <br>

    <input type="number">
    </form> `
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "pregunta2.html");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();

}

function cargarPregunta1() {
    titulo.innerHTML = `pregunta 1`
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "tarjeta.php");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();
}

function cargarPregunta2() {

    titulo.innerHTML = `pregunta 2`
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "pregunta 2.html");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status == 200)
            contenido.innerHTML = ajax.responseText;
    }
    ajax.send();
}

function cargarPregunta3() {
    titulo.innerHTML = `pregunta 3`
    var ajax = new XMLHttpRequest();
    ajax.open("get", "pregunta3.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8")
    ajax.send();
    ;
}

function insertar() {
    titulo.innerHTML = `pregunta 3`
    let insertar = document.getElementById("insertar");
    let fomularioAlumnos = document.getElementById("fomularioAlumnos");
    var ajax = new XMLHttpRequest();
    ajax.open("get", "alumnos.html", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8")
    ajax.send();
    ;
}

function insertar2() {
    //console.log("l")
    titulo.innerHTML = `pregunta 3`
    let insertar = document.getElementById("insertar2");
    //let fomularioAlumnos = document.getElementById("tabla");
    var ajax = new XMLHttpRequest();
    ajax.open("get", "pregunta3.php", true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8")
    ajax.send();
    ;
}

function pregunta4() {
    titulo = new XMLHttpRequest();
    ajax.open("GET", "pregunta3.php");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status === 200)
            contenido.innerHTML = ajax.responseText
    }
}

function pregunta5() {
    titulo = new XMLHttpRequest();
    ajax.open("GET", "pregunta4.php");
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4 && ajax.status === 200)
            contenido.innerHTML = ajax.responseText
    }
}

function eliminar() {
    let fomularioAlumnos = document.getElementById("tabla");
    var ajax = new XMLHttpRequest();
    ajax.open('GET', 'eliminar_alumno', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            document.getElementById("contenido").textContent = 'Se elimino el registro correctamente';
        }
    };
    ajax.send();
}
