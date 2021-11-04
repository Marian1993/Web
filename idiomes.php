<?php
if(isset($_GET['idioma'])){ 
    setcookie ("idioma", $_GET['idioma'], time () + 3600*24);
    $lang = $_GET['idioma'];
  } 
  elseif(isset($_COOKIE['idioma'])){ 
  // Miri que exista el archivo del idioma 
    if(file_exists("lang/".$_COOKIE['idioma'].".php")){ 
      $lang = $_COOKIE['idioma']; 
    } 
  } else{
    setcookie ("idioma", substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), time () + 3600*24);
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  }
  include("lang/".$lang.".php");
  ?>