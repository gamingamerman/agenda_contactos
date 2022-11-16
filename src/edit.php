<?php include "top.php"; ?>
<?php include "connection.php"; ?>
<section id="edit">
    <h2>Editar contacto</h2>
    <nav>
        <p><a href="index.php">Volver</a></p>
    </nav>
    <form action="" autocomplete="off" method="post">
        <fieldset>
            <?php
            $sql = "SELECT * FROM users WHERE id=" . $_GET["uid"];
            $result = $conn->query($sql);
            $result = $result ->fetch_array();
            ?>
            <legend>Datos del contacto</legend>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="<?=$result["name"] ?>" required>
            <label for="surname">Apellidos</label>
            <input type="text" name="surname" id="surname" value="<?=$result["surname"] ?>" required>
            <label for="tel">Teléfono</label>
            <input type="tel" name="tel" id="tel" value="<?=$result["tel"] ?>" required>
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" value="<?=$result["email"] ?>" required>
            <button type="submit" name="action" value="update">Actualizar</button>
            <button type="submit" name="action" value="delete" name="delete">Eliminar</button>
        </fieldset>
        <?php

            if (isset($_POST["delete"])) {
                $sql = "DELETE FROM users WHERE id=" . $_GET["uid"];

                if ($conn->query($sql) === TRUE) {
                    echo '<div style="background-color: lightgreen; padding: 10px; border-radius: 5px; border: 1px solid green;">Usuario Quitado satisfactoriamente.</div>';
                  } else {
                    echo '<div style="background-color: lightred; padding: 10px; border-radius: 5px; border: 1px solid red;">Error al quitar usuario.</div>';
                  }
            }

        ?>
    </form>
</section>
<?php include "bottom.php"; ?>
<?php include "end_connection.php"; ?>