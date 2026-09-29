<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <h3>Introduce un número:</h3>
    <!-- el action se puede dejar en blanco porque es el mismo -->
    <form action="/ejercicios/actividad1/ejercicio6.php" method="POST">
        <input type="number" name="numero"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        function numeroReal(int $num): string{
            if(isset($num)){
                if ($num > 0){
                    return "El número es positivo";
                } 
                
                if ($num == 0){
                    return "El número es cero";
                } 

                return "El número es negativo";
                
            }
            return "";
        }
        // Se puede añadir a la comprobación "is_numeric()" por si se cambia el type
        if (isset($_POST['numero']) && is_numeric($_POST['numero'])){
            echo $_POST['numero'];
            echo "</br>";
            echo numeroReal($_POST['numero']);
        }
    ?>

</body>

</html>