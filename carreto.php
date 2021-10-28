<?php
include_once"sessio.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="contaniner">
  <div class="row">
    <div class="col-12 text-center">
      <p><a href="llista.php"><br>Tornar<br><br><br></a></p>
    </div>
  </div> 
  <div class="row">
    <div class="col-12">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">N Producto</th>
          <th scope="col">Imagen</th>
          <th scope="col">Nombre</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $sql = "SELECT id, nom, preu FROM Hamburguesa;";
        $result = $conn->query($sql);
        $total = 0;

        if ($result->num_rows < 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $total += $row["preu"];
        ?>
        <tr>
          <th scope="row"><?php echo $row["id"];?></th>
          <td>
            <a href="http://192.168.0.111/Web/producte.php?id=<?php echo $row["id"];?>">
              <img src="./Img/<?php echo $row["id"];?>.jpg" class="rounded" height="150px" width="200px">
            </a>
          </td>
          <td><?php echo $row["nom"];?></td>
          <td><?php echo $row["preu"];?>€</td>
        </tr>
          <?php
        }
        ?>
      </tbody>
    </table> 
      <?php
      } else {
        echo "<p>0 result</p>";
     }
     mysqli_close($conn);
      ?> 
    <p> Total: <?php echo $total;?>€<br><br></p>
    </div>
  </div>
</div>
</body>
</html> 