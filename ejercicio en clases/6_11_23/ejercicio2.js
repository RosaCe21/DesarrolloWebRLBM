function cofi() {
    document.getElementById("titulo").innerHTML= "<h3 style:'text-align: center'>Pregunta 2</h3>";
    document.getElementById("contenido").innerHTML= "<div class:'margen'><br><label>Columnas</label><input type='text' id='columnas'> <label>Filas</label> <input type='text' id='columnas'> <br> <br><input type='submit' value='Enviar'></div>";

    function crearTabla(){
        document.getElementById("columnas").value = col;
        document.getElementById("filas").value = fil

        for(i=0;i<=fil;i++){
            for(j=0;j<=col;j++){
                ""
            }
        }
    }

}

function lista(){
    
}
