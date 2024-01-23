<?php
//- connect database
include "connect.php";

// maak een query
$sql = " SELECT * FROM fietsen";
 
//prepare query
$stmt = $conn-> prepare($sql);

//uitvoeren 
$stmt->execute();
//ophalen alle data 
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print_r($result);

// print de data rij voor rij 

echo"<br>";
 echo"<table border=1px>";
 echo "<br>";
echo "<table border=1px>";
echo "<tr>";
echo "<th>Merk</th>";
echo "<th>Type</th>";
echo "<th>Prijs</th>";
echo "<th>Foto</th>";
echo "</tr>";
foreach($result as $row){
    echo"<tr>";
    echo "<td>". $row['Merk'] . "</td>";
    echo "<td>".$row['Type'] . "</td>";
    echo"<td>". $row['Prijs'] . "</td>";
    echo "<td><img src='foto/" . $row['foto'] . "' alt='Fiets Image'></td>";
    echo"<tr>";
}

echo"</table>";
 
