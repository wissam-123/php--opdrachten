<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- auteur : wissam hatat -->
<h2>opdracht7.2</h2>

<form method="post">
    <p>Getal 1
        <input type="text" name="bedrag1" value="">
    </p>
    <input type="radio" name="operation" value="plus">Optellen
    <input type="radio" name="operation" value="min">Aftrekken
    <input type="radio" name="operation" value="keer">Vermenigvuldigen
    <input type="radio" name="operation" value="divd">Delen
    <p>Getal 2
        <input type="text" name="bedrag2" value="">
    </p>
    <p><input type="submit" name="omzetten" value="Omzetten"></p>
</form>

<?php
// IS omzet knop ingedrukt ?

if (isset($_POST['omzetten'])) {

    // VALIDATE BEDRAG
    if (empty($_POST['bedrag1']) || empty($_POST['bedrag2'])) {
        echo "Error: bedrag is niet ingevuld <br>";
    } elseif (!is_numeric($_POST['bedrag1']) || !is_numeric($_POST['bedrag2'])) {
        echo "Error: bedrag is niet numeriek <br>";
    } else {
        // getal is ok
        echo "het geposte bedrag1 is: " . $_POST['bedrag1'] . "<br>";
        echo "het geposte bedrag2 is: " . $_POST['bedrag2'] . "<br>";

        $_bedrag1 = $_POST["bedrag1"];
        $_bedrag2 = $_POST["bedrag2"];

        // Perform the selected operation
        if (isset($_POST['operation'])) {
            $operation = $_POST['operation'];
            switch ($operation) {
                case 'plus':
                    $_uitkomst = $_bedrag1 + $_bedrag2;
                    break;
                case 'min':
                    $_uitkomst = $_bedrag1 - $_bedrag2;
                    break;
                case 'keer':
                    $_uitkomst = $_bedrag1 * $_bedrag2;
                    break;
                case 'divd':
                    // Check for division by zero
                    if ($_bedrag2 == 0) {
                        echo "Error: Division by zero";
                    } else {
                        $_uitkomst = $_bedrag1 / $_bedrag2;
                    }
                    break;
                default:
                    echo "Error: Invalid operation";
                    break;
            }

            if (isset($_uitkomst)) {
                echo "De uitkomst is: " . $_uitkomst;
            }
        }
    }
}
?>

</body>
</html>
