<!DOCTYPE html>
<html>
<head>
    <title>Calendario</title>
    <style>
       
        table {
            width: 100%;
            height: 150px;
            border-collapse: collapse;
        }

        td {
            text-align: center;
            vertical-align: middle;
            width: 14.2857%; 
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        
        $num_dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);
        
        echo "<h1>Calendario de $mes/$anio</h1>";
        echo "<table>";
        echo "<tr>";
       
        $dias_semana = ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'];
        foreach ($dias_semana as $dia) {
            echo "<td><strong>$dia</strong></td>";
        }
        echo "</tr>";

        $dia_actual = 1;
        $dia_semana = date("w", strtotime("$anio-$mes-$dia_actual"));

        while ($dia_actual <= $num_dias) {
            if ($dia_semana == 0) {
                echo "<tr>";
            }
            echo "<td>$dia_actual</td>";
            $dia_actual++;
            $dia_semana = ($dia_semana + 1) % 7;
            if ($dia_semana == 0 ) {
                echo "</tr>";
            }
        }

        echo "</table>";
    ?>
</body>


</table>
</html>
