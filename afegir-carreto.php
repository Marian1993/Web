<?php
session_start();


echo $_SESSION["carrito"] = $_GET['id'];

echo $linia = $carreto[count($carreto)];


header("Location: carreto2.php");
?>