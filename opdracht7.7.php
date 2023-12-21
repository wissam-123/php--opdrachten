<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de ingevulde waarden van het formulier
    $startkapitaal = isset($_POST['startkapitaal']) ? floatval($_POST['startkapitaal']) : 0;
    $rentepercentage = isset($_POST['rente']) ? floatval($_POST['rente']) : 0;
    $jaarlijkse_opname = isset($_POST['jaarlijkse_opname']) ? floatval($_POST['jaarlijkse_opname']) : 0;

    // Controleer of de ingevulde waarden geldig zijn
    if ($startkapitaal <= 0 || $rentepercentage <= 0 || $jaarlijkse_opname <= 0) {
        echo "Vul geldige waarden in voor startkapitaal, rentepercentage en jaarlijkse opname.";
    } else {
        // Bereken de looptijd
        $jaar = 0;

        while ($startkapitaal > 0) {
            $startkapitaal += ($startkapitaal * ($rentepercentage / 100)); // Voeg rente toe
            $startkapitaal -= $jaarlijkse_opname; // Trek jaarlijkse opname af
            $jaar++;

            // Controleer op oneindige loop
            if ($jaar > 100) {
                echo "Geert kan zijn bedrag zijn hele leven lang opnemen.";
                break;
            }
        }

        echo "U kunt $jaar jaar lang € $jaarlijkse_opname opnemen.";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 7</title>
</head>
<body>
    <form method="post">
        <p>Startkapitaal <input type="text" name="startkapitaal" value="100000"></p>
        <p>Rentepercentage <input type="text" name="rente" value="4"></p>
        <p>Jaarlijkse opname <input type="text" name="jaarlijkse_opname" value="5000"></p>
        <input type="submit" name="verzenden" value="Verzenden">
    </form>
</body>
</html>
