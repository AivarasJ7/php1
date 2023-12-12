<?php
    $backgroundColor = '';

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['button1'])) {
            $backgroundColor = 'green';
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['button2'])) {
            $backgroundColor = 'yellow';

            header("Location: ./task7.php");
            die();
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
    <form method="get" action="./task7.php">
        <button type="submit" name="button1">BUTTON1</button>
    </form>
    
    <form method="post" action="./task7.php">
        <button type="submit" name="button2">BUTTON2</button>
    </form>
    <!-- 7.Pakartokite 6 uždavinį. Papildykite jį kodu, 
    kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.  -->
</body>
</html>