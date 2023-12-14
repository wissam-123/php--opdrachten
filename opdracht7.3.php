<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achtergrondkleur wijzigen</title>
    <style type="text/css">
        body {
            <?php
                // PHP code to set default background color
                $defaultColor = 'pink';
                echo "background-color: $defaultColor;";
            ?>
        }
    </style>
</head>
<body>
  <!-- auteur : wissam hatat -->

    <h1>Kies een achtergrondkleur:</h1>

    <form method="post" action="">
        <input type="radio" name="kleur" value="pink"> Roze<br>
        <input type="radio" name="kleur" value="lightblue"> Lichtblauw<br>
        <input type="radio" name="kleur" value="lightgreen"> Lichtgroen<br>
        <input type="radio" name="kleur" value="lightcoral"> Lichtkoraal<br>

        <input type="submit" name="verzenden" value="Verzenden">
    </form>

    <?php
        // PHP code to handle form submission and set background color
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verzenden'])) {
            if (isset($_POST['kleur'])) {
                $gekozenKleur = $_POST['kleur'];
                echo "<style type='text/css'>body { background-color: $gekozenKleur; }</style>";
            }
        }
    ?>
</body>
</html>


