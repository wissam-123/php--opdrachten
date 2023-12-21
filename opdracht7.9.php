<?php
// Initialiseren van variabelen
$inputText = '';
$outputText = '';
$selectedOption = '';

// Verwerken van formulierinzending
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ontvang de ingevoerde tekst en geselecteerde uitvoermethode
    $inputText = $_POST['input_text'];
    $selectedOption = $_POST['output_option'];

    // Pas de geselecteerde uitvoermethode toe op de ingevoerde tekst
    switch ($selectedOption) {
        case 'uppercase':
            $outputText = strtoupper($inputText);
            break;
        case 'lowercase':
            $outputText = strtolower($inputText);
            break;
        case 'capitalize_first':
            $outputText = ucfirst(strtolower($inputText));
            break;
        case 'capitalize_words':
            $outputText = ucwords(strtolower($inputText));
            break;
        default:
            $outputText = $inputText;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stringfuncties</title>
</head>
<body>

    <form method="post">
        <label for="input_text">Tekst:</label>
        <input type="text" id="input_text" name="input_text" value="<?php echo htmlspecialchars($inputText); ?>" required>

        <br>

        <input type="radio" id="uppercase" name="output_option" value="uppercase" <?php echo ($selectedOption === 'uppercase') ? 'checked' : ''; ?>>
        <label for="uppercase">In hoofdletters</label>

        <input type="radio" id="lowercase" name="output_option" value="lowercase" <?php echo ($selectedOption === 'lowercase') ? 'checked' : ''; ?>>
        <label for="lowercase">In kleine letters</label>

        <input type="radio" id="capitalize_first" name="output_option" value="capitalize_first" <?php echo ($selectedOption === 'capitalize_first') ? 'checked' : ''; ?>>
        <label for="capitalize_first">Eerste letter van zin hoofdletter</label>

        <input type="radio" id="capitalize_words" name="output_option" value="capitalize_words" <?php echo ($selectedOption === 'capitalize_words') ? 'checked' : ''; ?>>
        <label for="capitalize_words">Eerste letter van ieder woord hoofdletter</label>

        <br>

        <button type="submit">Weergeven</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h2>Uitvoer:</h2>
        <p><?php echo htmlspecialchars($outputText); ?></p>
    <?php endif; ?>

</body>
</html>
