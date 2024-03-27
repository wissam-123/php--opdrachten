<?php
    // functie: update Kroeg
    // auteur: Wigmans

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updatekroeg($_POST) == true){
            echo "<script>alert('Kroeg is gewijzigd')</script>";
        } else {
            echo '<script>alert("Kroeg is NIET gewijzigd")</script>';
        }
    }

    // Test of kroegcode is meegegeven in de URL
    if(isset($_GET['kroegcode'])){  
        // Haal alle info van de betreffende kroegcode $_GET['kroegcode']
        $kroegcode = $_GET['kroegcode'];
        $row = getKroeg($kroegcode);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wkroegcodeth=device-wkroegcodeth, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig Kroeg</title>
</head>
<body>
  <h2>Wijzig Kroeg</h2>
  <form method="post">
    
    <input type="hidden" kroegcode="kroegcode" name="kroegcode" required value="<?php echo $row['kroegcode']; ?>"><br>
    <label for="naam">naam:</label>
    <input type="text" kroegcode="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="adres "> adres :</label>
    <input type="text" kroegcode="adres" name="adres" required value="<?php echo $row['adres']; ?>"><br>

    <label for="plaats  "> plaats  :</label>
    <input type="text" kroegcode="plaats " name="plaats " required value="<?php echo $row['plaats']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='main.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen kroegcode opgegeven<br>";
    }
?>