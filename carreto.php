<?php
include_once"sessio.php";
include("idiomes.php");
session_start();
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
    <div class="col-1">
      <p><a href="llista.php"><br><?php echo $lang["volver"];?><br><br><br></a></p>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col"><?php echo $lang["producto"];?></th>
            <th scope="col"><?php echo $lang["imagen"];?></th>
            <th scope="col"><?php echo $lang["nombre"];?></th>
            <th scope="col"><?php echo $lang["precio2"];?></th>
          </tr>
        </thead>
        <tbody>
          <?php
          
            $total = 0;

            if (!empty($_SESSION['carrito'])) {

              for ($i=0; $i < count($_SESSION['carrito']) ; $i++) { 
      
                $sql = "SELECT id, nom, preu FROM Hamburguesa where id=" . $_SESSION['carrito'][$i] . ";";
                $result = $conn->query($sql);

                if($result->num_rows > 0){

                  $row = $result->fetch_assoc());
                
                    $total += $row["preu"];  

          ?>
          <tr>
            <th scope="row"><?php echo $row["id"];?></th>
            <td>
              <a href="producte.php?id=<?php echo $row["id"];?>">
                <img src="./Img/<?php echo $row["id"];?>.jpg" class="rounded" height="75px" width="125px">
              </a>
            </td>
            <td><?php echo $row["nom"];?></td>
            <td><?php echo $row["preu"];?>€</td>
          </tr>
          <?php
                  
                }
              } 
            }
          ?>
        </tbody>
      </table> 
      <?php
        mysqli_close($conn);
      ?> 
    <p>
      <?php 
      echo $lang["total"]; 
      echo $total;
      ?>€<br><br>
    </p>
    <br>
    <a href="pagar.php"><button type="submit" class="btn btn-primary"><?php echo $lang["pagar"]; ?></button></a>
    </div>
  </div>
</div>
</body>
</html> 