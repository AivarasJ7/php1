<?php
$backgroundColor = isset($_GET['color']) ? '#' . $_GET['color'] : 'black';


if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['submit'])){
    if (isset($_GET['color_input'])){
        $backgroundColor = '#' . $_GET['color_input'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: white;
        }
    </style>
</head>
<body>
    <form method="GET" action="./site3.php">
        <label for="color_input">Įveskite spalvos kodą:</label>
        <input type="text" id="color_input" name="color_input">
        <input type="submit" name="submit" value="Pakeisti spalvą">
    </form>

    <a href="./site3.php">BLACK</a>
    <a href="./site3.php?color=996633">BROWN</a>
    <!-- Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje . -->
</body>
</html>