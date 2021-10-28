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
<div class="container">
<h2 class="text-center"><br>Llista de d'hamburgueses<br><br></h2>
    <div class="row justify-content-end">
        <div class="col-12">
        <p><a href="carreto.php">Anar al<br><br></a></p>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <?php
    $sql = "SELECT id, nom FROM Hamburguesa;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    ?>
        <div class="col">
            <div class="p-3 text-center">
                <a href="http://192.168.0.111/Web/producte.php?id=<?php echo $row["id"];?>">
                    <img src="./Img/<?php echo $row["id"];?>.jpg" class="rounded" height="150px" width="200px">
                </a>
                <p ><?php echo $row["nom"];?></p>
                <p></p>
            </div>
        </div>   
    <?php
    }
        } else {
        echo "0 results";
    } 
    mysqli_close($conn);
    ?>
    </div>
</div>
</body>
</html>