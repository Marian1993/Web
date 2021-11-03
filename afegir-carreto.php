<?php
session_start();

if (isset($_SESSION["carreto"])) {

    $carreto = $_SESSION["carreto"];

} else {
    $carreto = array();
}

$codi = $_GET["id"];

$linia = array($_GET["id"]);
$carreto[count($carreto)] = $linia;

$_SESSION["carreto"] = $carreto;

header("Location: carreto2.php");
?>