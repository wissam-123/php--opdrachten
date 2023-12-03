<?php
                     // opdtacht 4.5
// Functie om te controleren of een getal even of oneven is
function checkEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "Even";
    } else {
        return "oneven";
    }
}

// Test de functie met een getal
$testNumber = 7; // Change this to the desired number
$result = checkEvenOrOdd($testNumber);

// Toon het resultaat
echo "Dit  nummer $testNumber is $result.<br>";
   

                        // opdracht 4.6

// Huidig uur
$currentHour = date("H"); // H geeft het uur aan

// Zelf in te voeren temperatuur en luchtvochtigheid
$temperature = 25; // Zelf invoeren in graden Celsius
$humidity = 80; // Zelf invoeren in percentage

// Controleer of de airco moet worden uitgeschakeld
if ($currentHour >= 17 || ($temperature < 20 && $humidity < 85)) {
    echo "Airco wordt uitgeschakeld. <br>";
} else {
    echo "Airco blijft ingeschakeld. <br>";
}
                            // opdracht 4,7
                     
// Variabele voor spaargeld
$spaargeld = 800; // Pas dit bedrag aan naar het werkelijke bedrag dat je hebt

// Prijs van de telefoon
$telefoonPrijs = 1000;

// Bereken het tekort
$tekort = $telefoonPrijs - $spaargeld;

// Controleer of er genoeg spaargeld is
if ($spaargeld >= $telefoonPrijs) {
    $over = $spaargeld - $telefoonPrijs;
    echo "Gefeliciteerd! Je kunt de telefoon kopen. Je hebt nog €{$over} over voor een hoesje.";
} elseif ($tekort > 250) {
    echo "Helaas, je hebt te weinig spaargeld. Het tekort is €{$tekort}. Het wordt aangeraden om een baantje te zoeken.";
} else {
    echo "Je hebt bijna genoeg spaargeld! Je komt €{$tekort} tekort, maar je bent er bijna.";
}
                             //    opdracht 8 

               
// Leeftijd van de persoon
$leeftijd = 20; // Pas dit aan naar de werkelijke leeftijd

// Stempas status (true als de persoon een stempas heeft, false anders)
$heeftStempas = false; // Pas dit aan naar de werkelijke situatie

// Controleer of iemand een scooter rijbewijs mag halen
if ($leeftijd >= 16) {
    echo "Gefeliciteerd! Je mag een scooter rijbewijs halen.<br>";
} else {
    echo "Sorry, je bent nog te jong om een scooter rijbewijs te halen.<br>";
}


// Controleer of iemand mag stemmen
if ($leeftijd >= 18 && $heeftStempas) {
    echo "Gefeliciteerd! Je mag stemmen.";
} elseif ($leeftijd >= 18 && !$heeftStempas) {
    echo "Je bent ouder dan 18, maar je hebt geen stempas ontvangen. Je mag niet stemmen.<br>";
} else {
    echo "Sorry, je bent nog te jong om te stemmen.<br>";
}

?>

                                                                    