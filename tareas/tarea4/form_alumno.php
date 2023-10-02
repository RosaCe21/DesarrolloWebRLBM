<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>alumno</title>
</head>
<body>
    <header class="cabeza">
        <h1>TAREA 4 - ALUMNO</h1>
    </header>
    <main class="cuerpoform">
        <section>
            <?php
                $form = $_GET['form'];
                if($form == 'create'){
                    echo '<h2>Registrar alumno</h2>';
                    echo '<form class="formg" action="create_alumno.php" method="POST">
                            <label for="nombre">Ingrese Nombre</label>
                            <input type="text" name="nombre">
                            <label for="apellido">Ingrese Apellido</label>
                            <input type="text" name="apellido">
                            <label for="cu">Ingrese CU</label>
                            <input type="text" name="cu">
                            <input type="submit" value="ingresar">
                            </form>';
                }
                else if($form == 'update'){
                    echo '<h2>Modificar registro de alumno</h2>';
                    echo '<form class="formg" action="update_alumno.php" method="POST">
                            <label for="id">Ingrese id del registro a cambiar</label>
                            <input type="number" name="id">
                            <label for="nombre">Ingrese Nombre nuevo</label>
                            <input type="text" name="nombre">
                            <label for="apellido">Ingrese Apellido nuevo</label>
                            <input type="text" name="apellido">
                            <label for="cu">Ingrese CU nuevo</label>
                            <input type="text" name="cu">
                            <input type="submit" value="Actualizar">
                            </form>';
                }
                else if($form == 'delete'){
                    echo '<h2>Eliminar registro de alumno</h2>';
                    echo '<form class="formg" action="delete_alumno.php" method="POST">
                            <label for="id">Ingrese id de registro a eliminar</label>
                            <input type="number" name="id">
                            <input type="submit" value="Eliminar">
                            </form>';
                }
            ?>
        </section>
    </main>
    <footer class="pie">
        <section>SIS-2/2023</section>
    </footer>
</body>
</html>