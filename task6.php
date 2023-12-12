<?php
    $backgroundColor = '';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['button1'])) {
            $backgroundColor = 'green';
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['button2'])) {
            $backgroundColor = 'yellow';
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
        }
    </style>
</head>
<body>
    <form method="get" action="./task6.php">
        <button type="submit" name="button1">BUTTON1</button>
    </form>
    
    <form method="post" action="./task6.php">
        <button type="submit" name="button2">BUTTON2</button>
    </form>
    <!-- 6.Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi 
    skairtingas formas- vieną GET ir kitą POST. 
    Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami 
    pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos
     ir geltonai- kai iš POST.  -->
</body>
</html>