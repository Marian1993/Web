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
</head>
<body>
    <?php
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
   mysqli_close($conn);
?>
</body>
</html>
