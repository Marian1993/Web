<?php
include_once 'sessio.php';
if(isset($_POST['save']))
{	 
	 $nom = $_POST['nom'];
	 $tipusCarn = $_POST['tipusCarn'];
	 $preu = $_POST['preu'];
	 $sql = "INSERT INTO Hamburguesa (nom,tipusCarn,preu)
	 VALUES ('$nom','$tipusCarn','$preu')";
	 if (mysqli_query($conn, $sql)) {
         
		echo "S'ha enviat correctament!";
	 } else {
		echo "Error: " . $sql;
	 }
	 mysqli_close($conn);
}
?>