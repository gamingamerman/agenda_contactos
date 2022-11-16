<?php include "top.php"; ?>
<!--
    <div class="alert alert-success">¡Ejemplo mensaje de éxito!</div>
    <div class="alert alert-error">¡Ejemplo mensaje de error!</div>
    -->
<?php include "connection.php"; ?>

<section id="contacts">
    <h2>Contactos</h2>
    <nav>
        <fieldset>
            <legend>Acciones</legend>
            <a href="create.php">
                <button>Crear contacto</button>
            </a>
        </fieldset>
    </nav>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            $row = $result->fetch_array();
            while ($row != null) {
                $id = $row["id"]
            ?>
                <tr>
                    <td class="symbol"><?=$row["id"]?></td>
                    <td class="name"><?=$row["name"]?></td>
                    <td class="surname"><?=$row["surname"]?></td>
                    <td class="actions">
                        <a class="button" href="view.php?uid=<?php echo $id;?>">
                            <button>Ver</button>
                        </a>
                        <a class="button" href="edit.php?uid=<?php echo $id;?>">
                            <button>Editar</button>
                        </a>
                    </td>
                </tr>
            <?php
                $row = $result->fetch_array();
            }
            ?>
        </tbody>
    </table>
</section>
<?php include "bottom.php"; ?>
<?php include "end_connection.php"; ?>