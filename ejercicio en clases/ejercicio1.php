<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <input type="number" id="a"><br>
    <input type="number" id="b"><br>
    <input type="number" id="c"><br>
    <br>
    <button onclick="calcular()">Calcular</button>

    <script>
        var input = document.getElementsByTagName("input")
        var a = parseInt(document.getElementById("a").value)
        var b = parseInt(document.getElementById("b").value)
        var c = parseInt(document.getElementById("c").value)

         function calcular(){
            if(a>b && a>c){
                // a.style.backgroundcolor = 'red';
                input[0].style.backgroundColor="red";
                input[1].style.backgroundColor="white";
                input[2].style.backgroundColor="white";
            }
            else{
                if(b>a && b>c){
                   // b.style.backgroundcolor = 'red';
                   input[0].style.backgroundColor="white";
                input[1].style.backgroundColor="red";
                input[2].style.backgroundColor="white";
                }
                else{
                
                       // c.style.backgroundcolor = 'red';
                       input[0].style.backgroundColor="white";
                input[1].style.backgroundColor="white";
                input[2].style.backgroundColor="red";
                    
                }
            }
         }

    </script>
</body>
</html>
