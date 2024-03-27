<?php
    // functie: formulier en database insert Kroeg
    // auteur: Wigmans

    echo "<h1>Insert Kroeg</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertkroeg($_POST) == true){
            echo "<script>alert('Kroeg is toegevoegd')</script>";
        } else {
            echo '<script>alert("Kroeg is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="naam">naam:</label>
        <input type="text" kroegcode="naam" name="naam" required><br>

        <label for="adres ">adres :</label>
        <input type="text" kroegcode="adres" name="adres" required><br>

        <label for="plaats ">plaats :</label>
        <input type="text" kroegcode="plaats" name="plaats" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='main.php'>Home</a>
    </body>
</html>
