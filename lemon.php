<?php
$backgroundColor = "#FFFF00";

if($_SERVER['REQUEST_METHOD'] == "GET"){
    header("Location: " . "./orange.php");
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemon</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
        }
    </style>
</head>
<body>
    <!-- 4.Sukurkite du puslapius lemon.php ir orange.php. 
    Jų fonus nuspalvinkite atitinkamom spalvom. Į lemon.php puslapį įdėkite kodą, 
    kuris naršyklę visada peradresuotų į puslapį orange.php. Pademonstruokite veikimą. -->
</body>
</html>