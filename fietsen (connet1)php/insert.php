<?php
 
 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  echo "Er is gepost<br>";
  print_r($_POST);
 
 /* include "connect.php";
 
  $sql = "INSERT INTO fietsen (merk, type, prijs, foto);"*/

  //- connect database
include "connect.php";

// maak een query
$sql = " INSERT into fietsen ( merk, type , prijs, foto)
      VALUES( :merk, :type, :prijs, :foto);";
 
//prepare query
$query = $conn-> prepare($sql);

//uitvoeren 
$status = $query -> execute(
  [
  ':merk'=> $_POST['merk'],
  ':type'=> $_POST['type'],
  ':prijs'=> $_POST['prijs'],
  ':foto'=> $_POST['foto'],

  ]
);

//test of insert gelukt is 
if($status== true){
  echo" toevoegen is gelukt";
} else{
  echo"toevoegen is niet gelukt";
}
}
 
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fietsen Formulier</title>
</head>
<body>
 
<h1>Voeg Fiets Toe</h1>
 
<form action="" method="post" enctype="multipart/form-data">
  <label for="merk">Merk:</label>
  <input type="text" id="merk" name="merk" required><br>
 
  <label for="type">Type:</label>
  <input type="text" id="type" name="type" required><br>
 
  <label for="prijs">Prijs:</label>
  <input type="number" id="prijs" name="prijs" required><br>

  <label for="foto">foto</label>
  <input type="number" id="foto" name="foto" required><br>
  <input type="submit" value="Voeg Toe">
</form>
 
</body>
</html>
 
