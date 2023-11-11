
function cargarContenido(abrir){
    var contenedor;
    contenedor = document.getElementById('container');
    var ajax = new XMLHttpRequest();
    ajax.open("get",abrir,true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type","test/html; charset=utf-8");
    ajax.send();
}
function preInscribir(){
    var contenedor;
    contenedor = document.getElementById('container');
    var cadena = crea_lista_parametro();

    ajax = new XMLHttpRequest();
    ajax.open("POST", "preinscribir.php",true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText
        }
        ajax.setRequestHeader("Content-Type", "application/x-form-url")
        ajax.send(cadena);
    }
}
function crearAlumno() {
    var contenedor;
    contenedor = document.getElementById('datos');
    var formulario = document.getElementById("form-alumno");
    var parametros = new FormData(formulario);

    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'creaciones.php' , true);
    ajax.onreadystatechange = function ( ) {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }

    ajax.send(parametros );
}
function editarAlumno(id)
{
    
    cargarContenido('form_update_alumno.php?id='+id)
}
function update()
{
    var contenedor;
    contenedor = document.getElementById('datos');
    var formulario = document.getElementById("form-alumno");
    var parametros = new FormData(formulario);

    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'update.php' , true);
    ajax.onreadystatechange = function ( ) {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            cargarContenido('read.php')
        }
    }

    ajax.send(parametros );    
}
function deleteAlumno(id)
{
    
    cargarContenido('delete.php?id='+id)
}