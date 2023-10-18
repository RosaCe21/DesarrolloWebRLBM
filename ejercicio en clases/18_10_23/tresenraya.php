<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<table>
    <tr>
        <td class="borde-derecho" onclick="marcar('c1')" id="c1"> &nbsp;</td>
        <td class="borde-derecho" onclick="marcar('c2')" id="c2">&nbsp;</td>
       <td onclick="marcar('c3')" id="c3">&nbsp;</td>
    </tr>

    <tr>
        <td class="borde-derecho borde-superior" onclick="marcar('c4')" id="c6">&nbsp;</td>
        <td class="borde-derecho borde-superior" onclick="marcar('c5')" id="c5">&nbsp;</td>
        <td class="borde-superior" onclick="marcar('c6')" id="c6">&nbsp;</td>
    </tr>

    <tr>
    <td class="borde-derecho borde-superior" onclick="marcar('c7')" id="c7">&nbsp;</td>
        <td class="borde-derecho borde-superior" onclick="marcar('c8')" id="c8">&nbsp;</td>
        <td class="borde-superior" onclick="marcar('c9')" id="c9">&nbsp;</td>
    </tr>
</table>
<p id="mesaje"></p>

<script>
    var turno = 'X';
    function cambiarTurno(){
        if(turno == 'X'){
            turno='O';
        }
        else{
            turno = 'X';
        }
    }
    function marcar(casilla){
        console.log(document.getElementById(casilla).innerHTML);
        document.getElementById('mesaje').innerHTML = '';
        if(document.getElementById(casilla).innerHTML == '&nbsp;'){
            document.getElementById(casilla).innerHTML = turno;
            cambiarTurno();
        }
        else{
            document.getElementById('mesaje').innerHTML = 'Ya esta ocupado';
        }
        
    }
</script>

</body>
</html>