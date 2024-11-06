<?php

$correct_username = "usuario";
$correct_password = "12345";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username === $correct_username && $password === $correct_password) {

        echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";

    } else {

        echo "Nombre de usuario o contraseña incorrectos.";
    }
}
