<?php
  include_once"sessio.php";
  $lang = 'cat'; 
  $aux = $lang;
  // Si se ha seleccionado un idioma se guarda 
  // una cookie con el idioma 
  if(isset($_GET['idioma'])){ 
    setcookie ("idioma", $_GET['idioma'], time () + 3600*24); 
    $lang = $_GET['idioma']; 
  } 
  elseif(isset($_COOKIE['idioma'])){ 
  // Miri que exista el archivo del idioma 
    if(file_exists("lang/".$_COOKIE['idioma'].".php")){ 
      $lang = $_COOKIE['idioma']; 
    } 
  } 
  include("lang/".$lang.".php"); 
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
<header>
    <nav class="navbar navbar-light bg-light justify-content-between">
    <form class="form-inline" method="GET">
        <label class="mr-sm-2" for="inlineFormCustomSelectPref"><?php echo $lang["cambiar_idioma"]; ?></label>
        <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="idioma" >
            <option selected><?php echo $aux?></option>
            <option value="es"><?php echo $lang["opcion_2"];?></option>
            <option value="cat"><?php echo $lang["opcion_3"];?></option>
        </select>
        <button type="submit" class="btn btn-primary"><?php echo $lang["cambiar"]; ?></button>
</form>
</nav>
  </header>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center"><br><?php echo $lang["titulo"];?><br><br></h2>
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="col-12 text-right">
        <p text-align="right"><a href="carreto.php"><?php echo $lang["carrito"];?><br><br></a></p>
        </div>
    </div>
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <?php
    $sql = "SELECT id, nom FROM Hamburguesa;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

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