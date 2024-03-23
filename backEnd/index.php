<?php


$nombre = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


if ($nombre == "Juan" and $contrasena == "123") {
    echo "Yo soy " . $nombre . " y este es mi cuenta!";
} else {
    header("Location: ../login/registro.html");
}

