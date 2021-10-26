<?php 
if ( isset( $_COOKIE[ 'contador' ] ) ) {

    setcookie( 'contador', $_COOKIE[ 'contador' ] + 1, time() + 60);
    $mensaje = 'Numero de contador: '.$_COOKIE[ 'contador' ];
}
else {

    setcookie( 'contador', 1, time() + 60 );
    $mensaje = 'Bienvenido por primera vez a nuesta web';
}
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
    <div class="container">
        <div class="row"><p><?php echo $mensaje;?></p></div>
    </div>
</body>
</html>
