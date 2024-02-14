<?php
// Test of er data gepost is
if
    (isset($_GET['id']))
 {
//connect database  
include
"connect.php"; 
// Maak een query 
$sql =
"
 DELETE FROM fietsen
  WHERE id = :id";
// Prepare query 
$stmt =
$conn->prepare($sql);
// Uitvoeren
   
$stmt->execute([
        
':id'=>$_GET['id']
    ]);


   
if ($stmt->rowCount()
 == 1) {
       
echo
'<script>alert("Fiets is verwijderd")</script>';
       
echo
"<script> location.replace('home.php'); </script>";
       
//header("Location: home2.php");
    }
else {
       
echo
"Delete is fout gegaan<br>";
    }
}


?>

