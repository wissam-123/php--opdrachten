<?php

// functie: data fiets update in database
 
include "connect.php";
        echo "<br>";
 
// test of er data gepost is
 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST);
 
    // maak een query
    $sql = "
        UPDATE fietsen SET
        merk = :merk,
        type = :type,
        prijs = :prijs,
        foto = :foto
        WHERE id = :id";
 
    // prepare query
    $stmt = $conn->prepare($sql);
 
    // uitvoeren
    $stmt->execute([
        ':merk'=>$_POST['merk'],
        ':type'=>$_POST['type'],
        ':prijs'=>$_POST['prijs'],
        ':foto'=>$_POST['foto'],
        ':id'=>$_POST['id'],
    ]);
//  test of insert gelukt is 
    if ($stmt -> rowCount()== 1) {
        echo"<script>alert('Fiets is gewijzigd')</script>";
        echo"<script>location.replace('home.php')</script>";
        // exit();
    }
    else {
        echo "<script>alert('Fiets is  niet gewijzigd')</script>";
    }
}
?>