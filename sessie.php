<?php

// auteur:wissam hatat
// functie: sessie

//Opdracht 6.1: Sessievariabelen
session_start();

if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 0;
}

$_SESSION['page_views']++;

echo "Je hebt deze pagina " . $_SESSION['page_views'] . " keer bezocht. <br>";

//Opdracht 6.2: Uitbreiding met Cookie
function trackPageViews() {
    $pageViews = isset($_COOKIE['page_views']) ? $_COOKIE['page_views'] : 0;
    $pageViews++;

    setcookie('page_views', $pageViews, time() + 24 * 60 * 60);

    echo "Je hebt deze pagina " . $pageViews . " keer bezocht.<br>";
}

trackPageViews();

//Opdracht 6.3: Willekeurige Postcode

function generateRandomPostcode() {
    $postcode = mt_rand(1000, 9999) . ' ' . chr(mt_rand(65, 90)) . chr(mt_rand(65, 90));
    
    return $postcode;
}

$randomPostcode = generateRandomPostcode();

echo "Willekeurige postcode: " . $randomPostcode;

echo"<br>";

//Opdracht 6.4: Functie voor Cirkelberekening

function calculateCircleProperties($radius) {
    define('PI', 3.14);

    $circumference = 2 * PI * $radius;
    $area = PI * pow($radius, 2);

    return [
        'circumference' => $circumference,
        'area' => $area
    ];
}

$radius = 6;
$results = calculateCircleProperties($radius);

echo "Voor een cirkel met straal {$radius}:\n <br>";
echo "Omtrek: " . $results['circumference'] . "\n <br>";
echo "Oppervlakte: " . $results['area'] . "\n <br>";


?>

