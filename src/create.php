<?php include "top.php"; ?>
<?php include "connection.php"; ?>
<section id="create">
    <h2>Nuevo contacto</h2>
    <nav>
        <p><a href="index.php">Volver</a></p>
    </nav>
    <form action="" autocomplete="off" method="post">
        <fieldset>
            <legend>Datos del contacto</legend>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" required>
            <label for="surname">Apellidos</label>
            <input type="text" name="surname" id="surname" required>
            <label for="tel">Teléfono</label>
            <input type="tel" name="tel" id="tel">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email">
            <input type="reset" value="Limpiar">
            <input type="submit" value="Crear" name="crear">
            <?php
        if (isset($_POST["crear"])) {
            $nombre = $_REQUEST['name'];
            $apellidos = $_REQUEST['surname'];
            $tel = $_REQUEST['tel'];
            $email = $_REQUEST['email'];
            
            $sql = "INSERT INTO users(name, surname, tel, email) VALUES('$nombre', '$apellidos', '$tel', '$email')";

            if ($conn -> query($sql) === TRUE) {
                echo '<div style="background-color: lightgreen; padding: 10px; border-radius: 5px; border: 1px solid green;">Usuario Creado Correctamente</div>';
            } else {
                echo '<div style="background-color: lightred; padding: 10px; border-radius: 5px; border: 1px solid red;">Usuario NO se ha creado Correctamente</div>';
            }
        }
            
        ?>
        </fieldset>
        
    </form>
</section>
<?php include "end_connection.php" ?>
<?php include "bottom.php"; ?>