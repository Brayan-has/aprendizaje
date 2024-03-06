<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/datos.css" />
</head>

<body clas="fondo">

    <?php

    $correo = $_POST['correo'];

    $contrasena = $_POST['contrasena']


        ?>

    <h1>Este es mi correo</h1>
    <p>
        <?php if ($correo == "Duvian@gmail.com") {
            echo $correo;
        } else {
            echo "Correo erroneo";
        } ?>
    </p>

    <h1>Esta es mi contraseña</h1>
    <p>
        <?php if ($contrasena == "123") {
            echo $contrasena;
        } else {
            echo "Contraseña Erronea";
        } ?>
    </p>

</body>

</html>