<?php

function getConexion()
{
    //1º Tenemos que establecer la conexión entre PHP y la BD.
    $dsn = "mysql:host=db;dbname=videoteca";
    try {
        $conexion = new PDO($dsn, "usuarioBD", "abc123");
    } catch (PDOException $e) {
        echo "Error en la conexion con la BD.";
        die();
    }

    return $conexion;
}

function addJuego(string $nombre, string $plat, int $year, string $genero){

    $sql = "INSERT INTO videojuegos(nombre, plataforma, anio_lanzamiento, genero)
    VALUES ('$nombre', '$plat','$year','$genero')";

    $conexion = getConexion();

    try{
        $filasAfectadas = $conexion->exec($sql);
        echo "Cantidad de videojuegos añadidos: $filasAfectadas <br>";
    } catch(PDOException $ex){
        echo "Algo ha fallado al añadir el juego<br>";
    }

    $conexion = null;

}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    addJuego($_POST['nombre'], $_POST['plat'],$_POST['year'],
    $_POST['genero']);
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Videojuegos</title>
</head>

<body>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br>
        <label for="plat">Plataforma:</label>
        <input type="text" name="plat"><br>
        <label for="year">Año de lanzamiento:</label>
        <input type="text" name="year"><br>
        <label for="genero">Género:</label>
        <input type="text" name="genero"><br>
        <button type="submit">Agregar</button>
    </form>
    <br>
    <p>Quieres ver la lista completa?</p>
    <a href="listar.php">Lista de videojuegos</a>
</body>

</html>