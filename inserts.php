<?php

session_start();

if (empty($_SESSION["usuario"])) {
   
    header("Location: autenticacio.php");
    exit();
}

echo "Soy un mensaje secreto";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="process.php">
		Nom:<br>
		<input type="text" name="nom">
		<br>
		Tipus de carn:<br>
		<input type="text" name="tipusCarn">
		<br>
		Preu:<br>
		<input type="text" name="preu">
		<br><br>
		<input type="submit" name="save" value="Enviar">
		<br>
		<br>
		<a href="autenticacio.php">Cerrar sesión</a>
</form>
</body>
</html>


