<?php
session_start();

if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito'] = array();

}
$codi =$_GET['id'];
array_push($_SESSION['carrito'], $codi);

header("Location: carreto.php");

?>