<?php

include_once "listar.php";

function deleteJuegos(int $id){

    $sql = "DELETE FROM videojuegos WHERE id=$id";
    $conexion = getConexion();
    try{
        $conexion->exec($sql);
        echo "<br> El juego se eliminó con éxito";
    }catch(PDOException $ex){
        echo "<br> Hubo un error al eliminar";
    }
    $conexion = null;
}

deleteJuegos($_GET['id']);

?>