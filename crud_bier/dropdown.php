<?php
// Naam:Wissam hatat
// Functie: Dropdown maken
 
include 'functions.php';
 


if (isset($_post['kies'])){
    echo"$_post[brouwcode]";

}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <label for="alcohol">Brouwcode::</label>
        <?php
        dropDown();
        ?>
        <input type="submit" value="kies" name="kies">
    </form>
</body>
</html>