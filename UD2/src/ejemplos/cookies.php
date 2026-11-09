<?php

//Leer cookie
if (isset($_COOKIE['contador'])) {
    $cont = intval($_COOKIE['contador']);
} else {
    $cont = 0;
}
$cont++;
//Escribir cookie
//OJO tiene que ir antes que cualquier echo!
setcookie(
    name: "contador",
    value: $cont,
    expires_or_options: time() +60,
    path: "/ejemplos",
    domain: "",
    secure: true,
    httponly: true
);

echo "Has entrado $cont veces";

//Para eliminar la cookie la hacemos caducar

if($cont == 10){
    setcookie("contador","",time()-1000);
}
