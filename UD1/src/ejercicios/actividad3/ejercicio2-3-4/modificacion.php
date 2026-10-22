<?php

include_once "listar.php";

function altJuegos(string $nombre, string $plat, int $year, string $gen){

    $sql = "";
    $conexion = getConexion();

    try{

    } catch(PDOException $ex){
        echo ("<br> Hubo un error al editar el juego seleccionado");
    }
}

function cambiarHtml(int $id){
    getJuegos();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Videojuego</title>
</head>
<body>
<form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br>
        <label for="plat">Plataforma:</label>
        <input type="text" name="plat"><br>
        <label for="year">Año de Lanzamiento:</label>
        <input type="text" name="year"><br>
        <label for="genero">Género:</label>
        <input type="text" name="genero"><br>
        <button type="submit" href="listar.php">Aceptar Cambios</button>
    </form>
</body>
</html>


<?php

?>