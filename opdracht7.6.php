<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemiddelde Berekenen</title>
</head>
<body>

<?php
// Functie om gemiddelde van een array te berekenen
function berekenGemiddelde($cijfers) {
    $aantalCijfers = count($cijfers);
    if ($aantalCijfers > 0) {
        $totaal = array_sum($cijfers);
        $gemiddelde = round($totaal / $aantalCijfers, 1);
        return $gemiddelde;
    } else {
        return 0; // Als er geen cijfers zijn, is het gemiddelde 0
    }
}

// Controleer of er op de verzendknop is geklikt
if (isset($_POST['verzenden'])) {
    // Controleer of het ingevoerde cijfer geldig is
    $nieuwCijfer = floatval($_POST['cijfer']);
    if ($nieuwCijfer >= 1.0 && $nieuwCijfer <= 10.0) {
        // Haal de bestaande cijfers op uit de cookie
        $oudeCijfers = isset($_COOKIE['cijfers']) ? unserialize($_COOKIE['cijfers']) : array();

        // Voeg het nieuwe cijfer toe aan de array
        $oudeCijfers[] = $nieuwCijfer;

        // Sla de nieuwe array op in de cookie
        setcookie('cijfers', serialize($oudeCijfers), time() + 3600); // Cookie geldig voor 1 uur
    }
}

// Haal de cijfers op uit de cookie en bereken het gemiddelde
$cijfers = isset($_COOKIE['cijfers']) ? unserialize($_COOKIE['cijfers']) : array();
$gemiddelde = berekenGemiddelde($cijfers);

?>

<form method="post">
    <p>Cijfer <input type="text" name="cijfer" value=""></p>
    <input type="submit" name="verzenden" value="Verzenden">
</form>

<p>Aantal ingevoerde cijfers: <?php echo count($cijfers); ?></p>
<p>Gemiddelde: <?php echo $gemiddelde; ?></p>

</body>
</html>

