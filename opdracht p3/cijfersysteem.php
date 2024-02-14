<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cijfersysteem</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 200px;
 
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
 
try{
 
    $db = new PDO("mysql:host=localhost;dbname=cijfers;", "root", "");
   
    $query = $db->prepare("SELECT * FROM cijfers");
   
    $query->execute();
   
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
 
    echo "<table>";
    echo "<tr><th>Leerling</th><th>Cijfer</th></tr>";
   
    foreach($result as $data){
        echo "<tr>";
        echo "<td>" . htmlspecialchars($data['leerling']) . "</td>";
        echo "<td>" . htmlspecialchars ($data['cijfer']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
 
catch(PDOException $e){
    die("Error!: " . $e->getMessage());
}
 
 
    ?>
 
   
</body>
</html>