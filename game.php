<?php
$player1 = "";
$player2 = "";
$score1 = 0;
$score2 = 0; 
$currentPlayer = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["start"])) {
        $player1 = $_POST["player1"];
        $player2 = $_POST["player2"];
    } elseif (isset($_POST["roll"])) {
        $diceResult = rand(1, 6);
        ${"score" . $currentPlayer} += $diceResult;
        $currentPlayer = 3 - $currentPlayer;
    }
}

if ($score1 >= 30 || $score2 >= 30) {
    $winner = ($score1 >= 30) ? $player1 : $player2;
    echo "<p>Sveikiname! $winner laimėjo!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <?php if (empty($player1) || empty($player2)) : ?>
            <label for="player1">Player 1 Name:</label>
            <input type="text" name="player1" required>
            <label for="player2">Player 2 Name:</label>
            <input type="text" name="player2" required>
            <button type="submit" name="start">Start Game</button>
        <?php else : ?>
            <p><?php echo "Current player: Player $currentPlayer - {${"player" . $currentPlayer}}"; ?></p>
            <p>Player 1 Score: <?php echo $score1; ?></p>
            <p>Player 2 Score: <?php echo $score2; ?></p>
            <button type="submit" name="roll">Roll the Dice</button>
        <?php endif; ?>
    </form>
</body>
<!-- 11. papildomas
Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais, kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. 
Šone yra rodomas žaidėjų rezultatas. Paspaudus “pradėti” turi atsirasti pirmo žaidėjo vardas ir mygtukas “mesti kauliuką”. 
Jį nuspaudus skriptas automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo rezultato,
 o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo kieno eilė “mesti kauliuką”). 
 Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas surenka 30 taškų. Tada parodomas pranešimas apie laimėjimą 
 ir vėl leidžiama suvesti žaidėjų vardus ir pradėti žaidimą iš naujo.
--> 
</html>