<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <h3>Introduce un número:</h3>
    <form action="/ejercicios/actividad1/ejercicio6.php" method="POST">
        <input type="number" name="numero"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        function numeroReal(int $num): string{
            if(isset($num)){
                if ($num > 0){
                    return "El número es positivo";
                } else if ($num == 0){
                    return "El número es cero";
                } else {
                    return "El número es negativo";
                }
            }
            return "";
        }
        if (isset($_POST['numero'])){
            echo $_POST['numero'];
            echo "</br>";
            echo numeroReal($_POST['numero']);
        }
    ?>

</body>

</html>