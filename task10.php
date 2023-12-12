<?php
$backgroundColor = "black";
$checkboxCount = 0;
$generatedCount = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    if (isset($_POST["letters"]) && is_array($_POST["letters"])) {
        $checkboxCount = count($_POST["letters"]);
    }
    $backgroundColor = "white";
    $generatedCount = $_POST["total_generated"] ?? 0;
}

if ($backgroundColor == 'black') {
    $letters = range('A', 'J');
    shuffle($letters);

    echo '<form method="POST" action="">';

    foreach ($letters as $letter) {
        echo '<input type="checkbox" name="letters[]" value="' . $letter . '">' . $letter . ' ';
        $generatedCount++;
    }

    echo '<input type="hidden" name="total_generated" value="' . $generatedCount . '">';
    
    echo '<br><br><input type="submit" name="submit" value="Change Color">';
    echo '</form>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task10</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo ($backgroundColor === "white") ? "black" : "white"; ?>;
        }
    </style>
</head>
<body>
    <?php if ($backgroundColor == 'white') { ?>
        <p>Selected checkboxes: <?php echo $checkboxCount; ?></p>
        <p>Total checkboxes generated: <?php echo $generatedCount; ?></p>
    <?php } ?>
    <!-- 10. Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota. -->
</body>
</html>