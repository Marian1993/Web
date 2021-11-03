<?php

$usuario_correcto = "mamm";
$palabra_secreta_correcta = "mamm";

$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["contraseña"];

if ($usuario === $usuario_correcto && $palabra_secreta === $palabra_secreta_correcta) {
    
    session_start();
    
    $_SESSION["usuario"] = $usuario;
    
    header("Location: inserts.php");
} else {
   
    echo "El usuario o la contraseña son incorrectos";
    header("Location:autenticacio.php")
}