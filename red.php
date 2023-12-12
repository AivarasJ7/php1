<?php
$backgroundColor = "#ff0000";

if ($_SERVER['REQUEST_METHOD'] === 'GET' && !isset($_GET['redirected'])) {
    header('Location: ./red.php?redirected=true');
    exit();
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
        }
    </style>
</head>
<body>
<a href="./red.php">RED</a>
<!-- 5.Sukurkite du atskirus puslapius blue.php ir red.php Juose sukurkite linkus į pačius save 
(abu į save ne į kitą puslapį!). Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog persikrautų, 
o PHP kodas (ne tiesiogiai html tagas!) naršyklę peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai). -->
</body>
</html>