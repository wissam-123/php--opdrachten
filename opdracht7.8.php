<?php
session_start();

// Voeg fruit toe aan de sessievariabele
if (isset($_POST['submit_add'])) {
    $fruit = $_POST['fruit'];
    $_SESSION['fruit'][] = $fruit;
}

// Sorteer de array als op de sort-knop wordt geklikt
if (isset($_POST['submit_sort'])) {
    sort($_SESSION['fruit']);
}

// Shuffle de array als op de shuffle-knop wordt geklikt
if (isset($_POST['submit_shuffle'])) {
    shuffle($_SESSION['fruit']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Formulier</title>
</head>
<body>

    <form method="post">
        <label for="fruit">Voeg fruit toe:</label>
        <input type="text" id="fruit" name="fruit" required>
        <button type="submit" name="submit_add">Voeg toe</button>
        <button type="submit" name="submit_sort">Sorteer (A-Z)</button>
        <button type="submit" name="submit_shuffle">Schud</button>
    </form>

    <h2>Inhoud van de sessievariabele:</h2>
    <ul>
        <?php
        // Gebruik een foreach-loop om de inhoud van de sessievariabele weer te geven
        if (isset($_SESSION['fruit'])) {
            foreach ($_SESSION['fruit'] as $item) {
                echo "<li>$item</li>";
            }
        }
        ?>
    </ul>

</body>
</html>
