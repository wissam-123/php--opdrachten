<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- auteur : wissam hatat -->
<h1>opdracht7.1</h1>

<form method="post">
    <p>Bedrag exclusief BTW
        <input type="text" name="bedrag" value="">
    </p>
    <input type="radio" name="BTW" value="negen">Laag, 9%
    <input type="radio" name="BTW" value="eenentwintig">Hoog, 21%
    <p><input type="submit" name="omzetten" value="Omzetten"></p>
</form>

<?php
// IS omzet knop ingedrukt ?

if (isset($_POST['omzetten'])) {

    // VALIDATE BEDRAG
    if (strlen($_POST['bedrag']) == 0) {
        echo "Error: bedrag is niet ingevuld <br>";
    } elseif (!filter_var($_POST['bedrag'], FILTER_VALIDATE_FLOAT)) {
        echo "Error: bedrag " . $_POST['bedrag'] . " is niet ok <br>";
    } else {
        // getal is ok
        echo "het geposte bedrag is: " . $_POST['bedrag'] . "<br>";

        // Check BTW and calculate
        if (isset($_POST['bedrag']) && isset($_POST['BTW'])) {
            $_bedrag = $_POST["bedrag"];
            $_percentage = ($_POST['BTW'] == "negen") ? 0.09 : 1.21;
            $_uitkomst = $_bedrag * $_percentage;

            if ($_POST['BTW'] == "negen") {
                echo " de Bedrag is 9% laag. Het resultaat  is: <br>" . $_uitkomst;
            } elseif ($_POST['BTW'] == "eenentwintig") {
                echo "Bedrag inclusief 21% BTW: <br>" . $_uitkomst;
            }
        }
    }
}




?>

</body>
</html>
