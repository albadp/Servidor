<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <form action="/ejercicios/actividad1/ejercicio9.php" method="POST">
    <h3>Introduce el primer número:</h3><br>
    <input type="number" name="numero"><br>
    <h3>Introduce el segundo número:</h3><br>
    <input type="number" name="numero"><br>
    <h3>Introduce el tercer número:</h3><br>
    <input type="number" name="numero"><br>
    <h3>Introduce el cuarto número:</h3><br>
    <input type="number" name="numero"><br>
    <h3>Introduce el quinto número:</h3><br>
    <input type="number" name="numero"><br>
    <button type="submit">Enviar</button>
    <?php 
    function crearArray(int $a, int $b, int $c, int $d, int $e):array{
        return $array=[$a,$b,$c,$d,$e];
    }

    function mayorMenorMedia(array $array){
        $min = min($array);
        $max = max($array);
        $media = array_sum($array) / count($array);
        $return = [$min, $max, $media];
        return $return;
    }
    ?>
</body>
</html>