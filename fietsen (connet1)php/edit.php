<?php

if(isset($_GET['id'])) {
    echo" Mijn id is :" . $_GET['id'];

    // opvragen data van het id (record uit de tabel fietsen)
    // SELECT * FROM fietsen WHERE id= $_grt['id']


      //- connect database
        include "connect.php";
    // maak een query
    $sql = "SELECT * FROM fietsen WHERE id=:id";

        // prepare query

    $stmt = $conn-> prepare($sql);

    //uitvoeren 
    $stmt->execute([':id'=>$_GET['id']]);
    //ophalen alle data 
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($result); 
    
  
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
 
<h1>WIJZIG FIETS</h1>
 
<form action="edit_db.php" method="post" enctype="multipart/form-data">
<input type="text" id="merk" name="id" required  value="<?php echo $result['id']; ?>"> <br>

  <label for="merk">Merk:</label>
  <input type="text" id="merk" name="merk" required  value="<?php echo $result['Merk']; ?>"> <br>
 
  <label for="type">Type:</label>
  <input type="text" id="type" name="type" required value="<?php echo $result['Type']; ?>"><br>
 
  <label for="prijs">Prijs:</label>
  <input type="number" id="prijs" name="prijs" required value="<?php echo $result['Prijs']; ?>"><br>
 

  <input type="submit" value="Voeg Toe">
</form>
 
</body>
</html>
 
