<?php
  include_once"sessio.php";

    $sql = "SELECT id, nom, tipusCarn, preu FROM Hamburguesa where id =" . $_GET["id"] . ";";
    $result = $conn->query($sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista</title>
</head>
<body>
    <div class="contaniner">
        <div class="row">
            <p><a href="llista.php">Tornar</a></p>
        </div>
    </div>
    <div class="container">
        <div class="row"><img src="./Img/<?php echo $row["id"];?>.jpg" height="150px" width="200px"></div>
        <div class="row"><?php echo $row["nom"];?></div>
        <div class="row"><?php echo $row["preu"];?></div>
        <div class="row"><?php echo $row["tipusCarn"];?></div>
        <div class="row">
            <button>Afegir al carreto</button>
        </div>
    </div>
    <?= mysqli_close($conn);?>
</body>
</html>