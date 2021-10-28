<?php
  include_once"sessio.php";

    $sql = "SELECT id, nom, tipusCarn, preu FROM Hamburguesa where id =" . $_GET["id"] . ";";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
          echo "<img src=\" ./Img/" . $row["id"].".jpg\" height=\"150\" width=\"200\"> <br>";
          echo "Nom: " . $row["nom"]. "<br>". "Tipus de carn: " . $row["tipusCarn"].
           "<br>". "Preu: " . $row["preu"]. "<br>";
      } else {
        echo "No hi ha tantes hamburgueses";
     }
    
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
        <div class="col-6 text-center"><img src="./Img/<?php echo $row["id"];?>.jpg" class="rounded" height="350px" width="500px"></div>
        <div class="col-4">
            <h1><?php echo $row["nom"];?></h1>
            <h4><?php echo $row["tipusCarn"];?></h4>
            <p><?php echo $row["preu"];?>€</p>
            <button>Afegir al carreto</button>        
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