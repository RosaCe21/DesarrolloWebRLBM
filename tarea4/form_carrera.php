<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Carrera</title>
</head>
<body>
    <header class="cabeza">
        <h1>TAREA 4 - CARRERA</h1>
    </header>
    <main class="cuerpoform">
        <section>
            <?php
                $form = $_GET['form'];
                if($form == 'create'){
                    echo '<h2>Registrar carrera</h2>';
                    echo '<form class="formg" action="create_carrera.php" method="POST">
                            <label for="nombre">Ingrese Nombre</label>
                            <input type="text" name="nombre">
                            <input type="submit" value="ingresar">
                            </form>';
                }
                else if($form == 'update'){
                    echo '<h2>Modificar registro de carrera</h2>';
                    echo '<form class="formg" action="update_carrera.php" method="POST">
                            <label for="id">Ingrese id de registro a modificar</label>
                            <input type="number" name="id">
                            <label for="nombre">Ingrese Nombre nuevo</label>
                            <input type="text" name="nombre">
                            <input type="submit" value="Actualizar">
                            </form>';
                }
                else if($form == 'delete'){
                    echo '<h2>Eliminar registro de carrera</h2>';
                    echo '<form class="formg" action="delete_carrera.php" method="POST">
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