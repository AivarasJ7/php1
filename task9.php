<?php
$backgroundColor = "black";
$checkboxCount = 0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["submit"])) {
        $checkboxCount = count($_POST["letters"]);
        $backgroundColor = "white";
    }
}
?>

<?php
$backgroundColor = "black";
$checkboxCount = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $checkboxCount = count($_POST["letters"]);
        $backgroundColor = "white";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>black</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo ($backgroundColor === "white") ? "black" : "white"; ?>;
        }
    </style>
</head>
<body>
    <?php if ($backgroundColor == 'black') { ?>
        <form method="POST" action="">
            <?php
            $letters = range('A', 'J');
            shuffle($letters);

            foreach ($letters as $letter) {
                echo '<input type="checkbox" name="letters[]" value="' . $letter . '">' . $letter . ' ';
            }
            ?>

            <br><br>
            <input type="submit" name="submit" value="Change Color">
        </form>
    <?php } else { ?>
        <p>Selected checkboxes: <?php echo $checkboxCount; ?></p>
    <?php } ?>

    <!-- 9.Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).  -->
</body>
</html>