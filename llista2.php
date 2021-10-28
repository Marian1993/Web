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
<h2 class="text-center">Llista de d'hamburgueses</h2>
<?php
 $sql = "SELECT id, nom FROM Hamburguesa;";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 ?>
<div class="container">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
      <div class="p-3 border bg-light">
          <img src="./Img/<?php echo $row["id"];?>.jpg" class="rounded" height="150px" width="200px">
          <p><?php echo $row["nom"];?></p>
          <p></p>
        </div>
    </div>
  </div>
</div>
<?php
    } else {
      echo "0 results";
   } 
   mysqli_close($conn);
?>
</body>
</html>