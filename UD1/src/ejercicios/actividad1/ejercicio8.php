<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <form action="" method="POST">
        <label for="base">Introduce la base:</label>
        <input type="text" name="base"><br>
        <label for="potencia">Introduce el exponente:</label>
        <input type="text" name="potencia"><br>
        <button type="submit">Calcular:</button>
    <?php 
    function potencia(int $a, int $b):int{
        return $a**$b;
    }
    // para evitar el isset($_POST[])(y repetirlo) se puede usar $_SERVER['REQUEST_METHOD']==='POST'
    if ((isset($_POST['base']) && isset($_POST['potencia'])) && 
    (is_numeric($_POST['base']) && is_numeric($_POST['potencia']))){
    echo(potencia($_POST['base'],$_POST['potencia']));
    }
    ?>
    
</body>
</html>