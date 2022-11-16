<?php

use LDAP\Result;

 include "connection.php"; ?>
<?php include "top.php"; ?>
<section id="view">
    <h2>Contacto</h2>
    <nav>
        <p><a href="index.php">Volver</a></p>
    </nav>
    <fieldset>
        <?php
        $sql = "SELECT * FROM users WHERE id=" . $_GET["uid"];
        $result = $conn->query($sql);
        $result = $result ->fetch_array();
        ?>
        <legend>Datos del contacto</legend>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="<?=$result["name"] ?>" readonly>
        <label for="surname">Apellidos</label>
        <input type="text" name="surname" id="surname" value="<?=$result["surname"] ?>" readonly>
        <label for="tel">Teléfono</label>
        <input type="tel" name="tel" id="tel" value="<?=$result["tel"] ?>" readonly>
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" value="<?=$result["email"] ?>" readonly>
    </fieldset>
</section>
<?php include "bottom.php"; ?>
<?php include "end_connection.php"; ?>