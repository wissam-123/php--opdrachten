<?php
    // functie: update fiets
    // auteur: Wigmans

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updateBier($_POST) == true){
            echo "<script>alert('bier is gewijzigd')</script>";
        } else {
            echo '<script>alert("bier is NIET gewijzigd")</script>';
        }
    }

    // Test of biercode is meegegeven in de URL
    if(isset($_GET['biercode'])){  
        // Haal alle info van de betreffende biercode $_GET['biercode']
        $biercode = $_GET['biercode'];
        $row = getbier($biercode);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="wbiercodeth=device-wbiercodeth, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig bier</title>
</head>
<body>
  <h2>Wijzig bier</h2>
  <form method="post">

  <input type="hidden" id="biercode" name="biercode" required value="<?php echo $row['biercode']; ?>"><br>

    <label for="naam">Naam:</label>
    <input type="text" biercode="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <label for="soort">Soort:</label>
    <input type="soort" biercode="soort" name="soort" required value="<?php echo $row['soort']; ?>"><br>

    <label for="sijl">Stijl:</label>
    <input type="text" biercode="stijl" name="stijl" required value="<?php echo $row['stijl']; ?>"><br>

    <label for="alcohol">Alcohol:</label>
    <input type="nummer" biercode="alcohol" name="alcohol" required value="<?php echo $row['alcohol']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_bier.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen biercode opgegeven<br>";
    }
?>