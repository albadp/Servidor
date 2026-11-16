<?php

if (isset($_COOKIE['login'])) {
    $name = $_COOKIE['login'];
} 
if(isset($_POST['name']) && !empty($_POST['name'])){
    $name = $_POST['name'];
    setcookie(
        name:"login",
        value: $name,
        expires_or_options: time() +5
    );
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
    <?php 
    if(isset($name)):
        echo "Bienvenido/a $name !";
    else:
    ?>
    <form action="" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name"><br>
        <button type="submit">Iniciar Sesión:</button>
    </form>
    <?php
    endif;
    ?>
</body>
</html>







