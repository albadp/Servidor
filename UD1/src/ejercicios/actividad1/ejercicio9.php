<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <form action="" method="POST">
    <h3>Introduce el primer número:</h3><br>
    <input type="number" name="numero1"><br>
    <h3>Introduce el segundo número:</h3><br>
    <input type="number" name="numero2"><br>
    <h3>Introduce el tercer número:</h3><br>
    <input type="number" name="numero3"><br>
    <h3>Introduce el cuarto número:</h3><br>
    <input type="number" name="numero4"><br>
    <h3>Introduce el quinto número:</h3><br>
    <input type="number" name="numero5"><br>
    <button type="submit">Enviar</button>
    <?php 
    function crearArray( int $a,int  $b,int  $c, int $d,int $e):array{
        return $array=[$a,$b,$c,$d,$e];
    }

    function mayorMenorMedia(array $arr):array{
        $min = min($arr);
        $max = max($arr);
        $media = array_sum($arr) / count($arr);
        $return = [$min, $max, $media];
        return $return;
    }
    if (isset($_POST['numero1']) && isset($_POST['numero2']) 
    && isset($_POST['numero3']) && isset($_POST['numero4']) 
    && isset($_POST['numero5'])){
        $arr = crearArray(($_POST['numero1']), ($_POST['numero2']),($_POST['numero3']),($_POST['numero4']),($_POST['numero5']));
        echo (${mayorMenorMedia($arr)});
    }
    ?>
</body>
</html>