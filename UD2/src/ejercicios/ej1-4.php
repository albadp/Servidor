<?php

if (isset($_COOKIE['login'])) {
    $name = strval($_COOKIE['login']);
} else {
    $name = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name"><br>
        <button type="submit">Iniciar Sesión:</button>
    </form>
    <?php
    //IF IMPORTANTE!!!
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($name)){
                $name = $_POST['name'];
            }
    
        setcookie(
            name:"login",
            value: $name,
            expires_or_options: time() +3600,
            path: "/ejercicios/ej1-4.php",
            domain: "",
            secure: true,
            httponly: true
        );
        echo "Bienvenido/a $name !";
        }
        
    ?>
</body>
</html>







