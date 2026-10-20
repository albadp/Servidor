<?php

function getConexion()
{
    //1º Tenemos que establecer la conexión entre PHP y la BD.
    $dsn = "mysql:host=db;dbname=usuarios";
    try {
        $conexion = new PDO($dsn, "usuarioBD", "abc123");
    } catch (PDOException $e) {
        echo "Error en la conexion con la BD.";
        die();
    }

    return $conexion;
}

function addUsuario(string $nick, string $email, string $nombre, string $apellido1,
 string $apellido2, string $contrasena){

    $hash = hash('sha256', $contrasena);
    $sql = "INSERT INTO usuario(nickname, nombre, apellido1, apellido2, email, contrasena) 
    VALUES('$nick','$nombre','$apellido1','$apellido2','$email','$hash')";

    $conexion = getConexion();

    try{
        $filasAfectadas = $conexion->exec($sql);
        echo "Cantidad de usuarios añadidos: $filasAfectadas <br>";
    } catch(PDOException $ex){
        echo "Algo ha fallado al crear el usuario<br>";
    }

    $conexion = null;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    addUsuario($_POST['nickname'], $_POST['email'],$_POST['nombre'],
    $_POST['apellido1'],$_POST['apellido2'],$_POST['contrasena']);
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
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br>
        <label for="apellido1">Primer Apellido:</label>
        <input type="text" name="apellido1"><br>
        <label for="apellido2">Segundo Apellido:</label>
        <input type="text" name="apellido2"><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena"><br>
        <button type="submit">Agregar</button>
    </form>
    </body>

</html>