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

function getJuegos(): array{

    $toret = [];
    $conexion = getConexion();
    $sql = "SELECT * FROM videojuegos";

    try{
        $resultado = $conexion->query($sql);
        $toret = $resultado->fetchAll();
        $conexion = null;
    } catch (PDOException $ex){
        echo "Hubo un error al cargar la base de datos";
    }
    
    return $toret;

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
</head>
<body>
    <h1>Videojuegos registrados</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Plataforma</th>
            <th>Año</th>
            <th>Género</th>
            <th>Modificar</th>
            <th>Añadir</th>
        </tr>
        <?php 
            $juegos = getJuegos();
            if(count($juegos)>0){
                foreach($juegos as $juego){
                    echo "<tr>";
                    echo "<td>" . $juego['nombre'] . "</td>";
                    echo "<td>" . $juego['plataforma'] . "</td>";
                    echo "<td>" . $juego['anio_lanzamiento'] . "</td>";
                    echo "<td>" . $juego['genero'] . "</td>";
                    echo "<td><a href='modificacion.php?id=" . $juego['id'] . "'>Editar</a></td>";
                    echo "<td><a href='eliminar.php?id=" . $juego['id'] . "'>Eliminar</a></td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
    <h2>Quieres añadir un nuevo videojuego?</h2>
    <a href="alta.php">Añadelo aquí</a>

</body>
</html>