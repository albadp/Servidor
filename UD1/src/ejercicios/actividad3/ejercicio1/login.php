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

function getUsuario(string $nick, string $pass){

    $conexion = getConexion();
    $hash = hash('sha256', $pass);

    $sql = "SELECT *
    FROM usuario
    WHERE (nickname = '$nick') and (contrasena = '$hash')";
    try{
        $resultado = $conexion->query($sql);
        if ($resultado !== false){
            echo "Inicio de usuario realizado <br>";
        } else {
            echo "Credenciales incorrectas <br>";
        }
    } catch(PDOException $ex){
        echo "Hubo un error en el inicio de sesión";
    }
    
    $conexion = null;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    getUsuario($_POST['nickname'], $_POST['contrasena']);
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Usuarios</title>
</head>

<body>
    <form action="" method="post">
        <label for="nickname">Nickname:</label>
        <input type="text" name="nickname"><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena"><br>
        <button type="submit">Iniciar Sesión:</button>
    </form>
    <br>
    <p>No tienes cuenta?</p>
    <a href="registro.php">Regístrate</a>
</body>
</html>

