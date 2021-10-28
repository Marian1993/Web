<?php
  include_once"sessio.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="contaniner">
        <div class="row">
            <div class="col-9">
            <p><a href="llista.php">Tornar</a></p>
            </div>
        </div>
    <?php
    $sql = "SELECT id, nom, tipusCarn, preu FROM Hamburguesa where id =" . $_GET["id"] . ";";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
    ?>
        <div class="row justify-content-center">
            <div class="col-6 text-center"><img src="./Img/<?php echo $row["id"];?>.jpg" class="rounded" height="350px" width="500px"></div>
            <div class="col-5">
                <h1 class="text-center"><?php echo $row["nom"];?></h1>
                <h4 class="text-center"><?php echo $row["tipusCarn"];?></h4>
                <p class="text-center"><?php echo $row["preu"];?>€</p>
                <button type="button" class="btn btn-info text-center">Afegir al carreto</button>        
            </div>
        </div>
    </div>
    <?php
    } else {
        echo "No hi ha tantes hamburgueses";
     }
     mysqli_close($conn);
     ?>
</body>
</html>