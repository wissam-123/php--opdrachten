<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>opdracht7.4</h1>
<!-- auteur : wissam hatat -->
<form method="post">
    <p>Prijs
        <input type="text" name="bedrag" value="">
    </p>
    <p>Korting(%) 
        <input type="text" name="verhouding" value="">
    </p>
    <p> <input type="submit" name="omzetten" value="Omzetten"></p>
</form>
<?php
 if(isset($_POST['bedrag']) == true && isset($_POST['verhouding']) == true ){
    $_bedrag = $_POST["bedrag"];
    $_percentage = $_POST['verhouding'];
    $x = $_bedrag * $_percentage / 100;
   $_uitkomst = $_bedrag - $x;

    echo number_format($_uitkomst, 2, ',', '.');
 }
?>

</body>
</html>