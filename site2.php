<?php
$backgroundColor = isset($_GET['color']) ? '#' . $_GET['color'] : 'black';
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
    <a href="./site2.php">BLACK</a>
    <a href="./site2.php?color=996633">BROWN</a>

    <!-- sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
    o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu 
    (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. -->

</body>
</html>