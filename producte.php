<?php
  include_once"sessio.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="contaniner">
        <div class="row">
            <div class="col-1 text-center">
            <p><a href="llista.php"><br>Tornar<br><br><br></a></p>
            </div>
        </div>
    <?php
    $sql = "SELECT id, nom, tipusCarn, preu FROM Hamburguesa where id =" . $_GET["id"] . ";";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
    ?>
        
        <div class="row justify-content-center">
            <div class="col-8 text-center"><img src="./Img/<?php echo $row["id"];?>.jpg" class="rounded" height="350px" width="500px"></div>
            <div class="col-4">
                <h1><?php echo $row["nom"];?><br></h1>
                <p><?php echo $lang["tipo"];?><?php echo $row["tipusCarn"];?></p>
                <p><?php echo $lang["precio"];?><?php echo $row["preu"];?>€<br><br></p>
                <button type="button" class="btn btn-info "><?php echo $lang["añadir"];?>/button>        
            </div>
        </div>
    </div>
    <?php
    } else {
        echo $lang["no"];
     }
     mysqli_close($conn);
     ?>
</body>
</html>