<?php
    $backgroundColor = "#ff99cc";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header("Location: rose.php");
        die();
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
    <form method="post" action="./rose.php">
        <button type="submit" name="button1">GO TO ROSE</button>
    </form>
    <!-- 8.Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. 
    Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą nukreipkite, 
    kad ji atsidarinėtų rose.php puslapyje. Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į 
    rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį.   -->
</body>
</html>