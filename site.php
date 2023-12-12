<?php
$backgroundColor = isset($_GET['color']) && $_GET['color'] == 1 ? 'red' : 'black';
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
    <a href="./site.php">BLACK</a>
    <a href="./site.php?color=1">RED</a>

    <!-- / Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  
// perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, 
// o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->

</body>
</html>