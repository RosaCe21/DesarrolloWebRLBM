<?php
    $lista = array(
        array("nro" => 1, "nombres" => "Juan","apellidos" => "Perez",  "edad" => "25", "materia" => "SIS-256", "nota" => "83"),
        array("nro" => 2, "nombres" => "Ricardo","apellidos" => "Luna",  "edad" => "30", "materia" => "SIS-258", "nota" => "70"),
        array("nro" => 3, "nombres" => "Teresa","apellidos" => "Tomasa",  "edad" => "26", "materia" => "SIS-256", "nota" => "84"),
        array("nro" => 4, "nombres" => "Favian","apellidos" => "Umbre",  "edad" => "24", "materia" => "SIS-258", "nota" => "70"),
    );
    echo json_encode($lista,JSON_UNESCAPED_UNICODE);
?>
<?php
