<?php
  include_once"session.php";

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

    $servername = "localhost";
    $username = "mamm";
    $password = "mamm";
    $dbname = "web";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Hamburguesa;";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "Tipus: " . $row["tipus"]. "<br>";
        echo "<img src=\" ./Img/" . $row["id"].".jpg\"> <br>";
      }
    } else {
      echo "0 results";
   }
?>
</body>
</html>