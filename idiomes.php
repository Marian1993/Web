<?php
if(isset($_GET['idioma'])){ 
    
    if(file_exists("lang/".$_GET['idioma'].".php")){ 
        setcookie ("idioma", $_GET['idioma'], time () + 3600*24);
        $lang = $_GET['idioma']; 
    } 
} 
elseif(isset($_COOKIE['idioma'])){ 
  
    if(file_exists("lang/".$_COOKIE['idioma'].".php")){ 
        $lang = $_COOKIE['idioma']; 
    } 
}else{
    
    if(file_exists("lang/". substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) .".php")){

        setcookie ("idioma", substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), time () + 3600*24);
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    }else{
        $lang = "es";
    }
}
include("lang/".$lang.".php");
?>