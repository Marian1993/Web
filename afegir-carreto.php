<?php
session_start();

if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito'] = array();

}

$codi =$_GET['id'];
array_push($_SESSION['carrito'], $codi);

header("Location: carreto2.php");

/*if (isset($_SESSION["carrito"])) {

$carreto = $_SESSION["carrito"];

}

$codi = $_GET["id"];

$linia = array($_GET["id"]);
$carreto[count($carreto)] = $linia;

$_SESSION["carrito"] = $carreto;*/
?>