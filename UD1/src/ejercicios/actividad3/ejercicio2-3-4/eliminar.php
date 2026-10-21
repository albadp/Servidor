<?php

include_once "listar.php";

function deleteJuegos(int $id){

    $sql = "DELETE * FROM videojuegos WHERE id='$id'";
    $conexion = getConexion();
    try{
        $conexion->exec($sql);
        echo "El juego se eliminó con éxito";
    }catch(PDOException $ex){
        echo "Hubo un error al eliminar";
    }
    $conexion = null;
}



?>