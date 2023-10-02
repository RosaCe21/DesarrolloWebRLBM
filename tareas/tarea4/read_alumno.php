<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Read Alumno</title>
</head>
<body>
    <header class="cabeza">
        <h1>TAREA 4 - READ ALUMNO</h1>
    </header>
    <main class="cuerpoform">
        <section>
            <?php
            include('conexion.php');
            $sql = "SELECT * FROM alumno";

            $resultado = $con->query($sql);
            if ($resultado->num_rows > 0) 
            {
            ?>
            <table class="tablag">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CU</th>
                </tr>
            <?php 
                while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['idalumno']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['CU']; ?></td>
                </tr>
            <?php 
                } 
            ?>
            </table>
            <?php
                } else {
            ?> 
            <div>No existen registros que mostrar</div>
            <?php }
            ?>
        </section>
    </main>
    <footer class="pie">
        <section>SIS-2/2023</section>
    </footer>
</body>
</html>