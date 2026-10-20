<?php
include_once "registro.php";

function getUsuario(string $nick, string $email, string $pass){

    $conexion = getConexion();

    $sql = "SELECT nickname, email, contrasena 
    FROM usuario
    WHERE nickname = $nick && email = $email && contrasena = $pass";
    $resultado = $conexion->query($sql);
    if ($resultado){
        echo "";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
</head>

<body>
    <form action="" method="post">
        <label for="nickname">Nickname:</label>
        <input type="text" name="nickname"><br>
        <label for="email">Correo electrónico:</label>
        <input type="text" name="email"><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena"><br>
        <button type="submit">Agregar</button>
    </form>
</body>
</html>

