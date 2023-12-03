
<?php
require_once("ListaAlumnos.php");
session_start();

$listaAlumnos = new ListaAlumnos();

if (!isset($_SESSION['alumnos'])) {
    $_SESSION['alumnos'] = array();
}

if (isset($_POST["cu"]) && isset($_POST["nombre"]) && isset($_POST["apellidos"])) {
    $cu = $_POST["cu"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $alumno = new Alumno($cu, $nombre, $apellidos);
    $listaAlumnos->insertarAlumno($alumno);

    $_SESSION['alumnos'][] = $alumno;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 3</title>
</head>

<body>
    <h1>Pregunta 3</h1>
    <table border="1" id=tabla>
        <tr>
            <th>CU</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th></th>
        </tr>
        <?php
        foreach ($_SESSION['alumnos'] as $alumno) {
            echo "<tr>";
            echo "<td>" . $alumno->cu . "</td>";
            echo "<td>" . $alumno->nombre . "</td>";
            echo "<td>" . $alumno->apellidos . "</td>";
            echo "<td><a href='javascript:eliminar()' id='eliminar'>Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="javascript:insertar()" id="insertar">Insertar</a>
    <br><br>

    <div id="fomularioAlumnos"></div>
</body>
</html>

<?php
class Alumno
{
    public $cu;
    public $nombre;
    public $apellidos;

    function __construct($cu, $nombre, $apellidos)
    {
        $this->cu = $cu;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }
}
?>

