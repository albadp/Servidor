<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <form action="/ejercicios/actividad1/ejercicio7.php" method="POST">
        <h3>Introduce una palabra:</h3>
        <input type="text" name="palabra"><br>
        <h3>Introduce el anagrama:</h3>
        <input type="text" name="anagrama"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        function anagrama(string $palabra, string $anagrama){
            $palabra;
            echo $palabra;

        }

        if (isset($_POST['palabra']) && isset($_POST['anagrama'])){
            echo numeroReal($_POST['numero']);
        }
    ?>

</body>

</html>