<?php
// auteur: Wissam
// functie: verwijder een bier op basis van de biercode
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['biercode'])){

    // test of insert gelukt is
    if(deleteBier($_GET['biercode']) == true){
        echo '<script>alert("Biercode: ' . $_GET['biercode'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_bier.php'); </script>";
    } else {
        echo '<script>alert("Bier is NIET verwijderd")</script>';
    }
}
?>
