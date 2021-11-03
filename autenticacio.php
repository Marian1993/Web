<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container" onclick="onclick">
    <div class="top"></div>
    <div class="bottom"></div>
    <div class="center">
        <form action="login.php" method="post">
            <h2>Iniciar Sesion</h2>
            <input name="usuario" type="text" placeholder="usuario"/>
            <input name="contraseña" type="password" placeholder="contraseña"/>
            <button name="iniciar" type="submit">Iniciar Sesion</button>
            <h2>&nbsp;</h2>
        </form>
    </div>
</div>
</body>
</html>