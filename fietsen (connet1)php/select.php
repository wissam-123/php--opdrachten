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
echo "<th>Id</th>";
echo "<th>Edit</th>";
echo "<th>Delet</th>";
echo "</tr>";
foreach($result as $row){
    echo"<tr>";
    echo "<td>". $row['Merk'] . "</td>";
    echo "<td>".$row['Type'] . "</td>";
    echo"<td>". $row['Prijs'] . "</td>";
    // echo "<td><img src='foto/" . $row['foto'] . "' alt='Fiets Image'></td>";
    echo "<td><img src=\"foto/", $row['foto'], "\"", " width=\"200px\" height=\"200px\"", "></td>";
    echo"<td>" . $row['id'] . "</td>";
    echo"<td><a href='edit.php?id=" . $row['id'] . "'>" ."wijzig</a></td>";
    echo"<td><a href='delet.php?id=" . $row['id'] . "'>" ."delete</a></td>";


    echo"<tr>";
}

echo"</table>";
 ?>
