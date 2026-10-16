<?php

/**
 * Agregar cliente en bbdd utilizando mysqli
 */

function getConexion(){
    $conexion = new mysqli("db", "usuarioDB", "abc123", "mi_base_de_datos", 3306);
    if($conexion->connect_error){
        echo "Error de conexión";
        die();
    }
    return $conexion;
}

//Me perdí por ver el repo de profe
function addCliente(string $nombre, string $telef){
    //1º conexion entre php y bd
    $conexion = getConexion();

    $sql = "INSERT INTO clientes(nombre, telefono) VALUES (`$nombre`,`$telef`)";
    echo "consulta ejecutada: <br> <span>$sql</span><br>";

    $conexion->query($sql);
    $conexion->close();
}

function getClientes():array{
    return [];
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    addCliente($_POST['nombre'], $_POST['telefono']);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar clientes</title>
</head>
<body>
    <form action="" method="post">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br>
        <label for="telefono">Teléfono</label><br>
        <input type="text" name="telefono"><br>
    </form>
</body>
</html>