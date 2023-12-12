<?php
$name = "Aivaras";
$surname = "Pavardenis";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 1.Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->
<?php
$name = "Aivaras";
$surname = "Jastrumskis";
$birthYear = 1997;
$currentYear = 2023;
$age = ($currentYear - $birthYear);

echo "<h2>As esu " . $name . " " . $surname . ". Man yra " . $age . " metai.</h2>";
?>

<?php
//2. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand()
// jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. 
// Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$number1 = rand(0, 25);
$number2 = rand(0, 25);
$number3 = rand(0, 25);

if (($number1 >= $number2 && $number1 <= $number3) || ($number1 <= $number2 && $number1 >= $number3)) {
    $middleNumber = $number1;
}elseif (($number2 >= $number1 && $number2 <= $number3) || ($number2 <= $number1 && $number2 >= $number3)) {
    $middleNumber = $number2;
}else {
    $middleNumber = $number3;
}

echo "<p>Pirmas skaičius: $number1</p>";
echo "<p>Antras skaičius: $number2</p>";
echo "<p>Trečias skaičius: $number3</p>";
echo "<p>Vidurinis skaičius: $middleNumber</p>";
?>

<?php
//4.Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji 
// (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, 
// kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "Kraštinė a: $a, Kraštinė b: $b, Kraštinė c: $c<br>";

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Galima sudaryti trikampį.<br>";
}else {
    echo "Negalima sudaryti trikampio.<br>";
}
?>

<?php
//5.Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
//(sprendimui masyvo nenaudoti).
$rndNumb1 = rand(0, 2);
$rndNumb2 = rand(0, 2);
$rndNumb3 = rand(0, 2);
$rndNumb4 = rand(0, 2);

$zeroesCount = 0;
$onesCount = 0;
$twosCount = 0;

echo "Generated numbers: $rndNumb1, $rndNumb2, $rndNumb3, $rndNumb4 <br>";

if($rndNumb1 == 0){
    $zeroesCount++;
}elseif($rndNumb1 == 1){
    $onesCount++;
}else {
    $twosCount++;
}

if($rndNumb2 == 0){
    $zeroesCount++;
}elseif($rndNumb2 == 1){
    $onesCount++;
}else {
    $twosCount++;
}

if($rndNumb3 == 0){
    $zeroesCount++;
}elseif($rndNumb3 == 1){
    $onesCount++;
}else {
    $twosCount++;
}

if($rndNumb4 == 0){
    $zeroesCount++;
}elseif($rndNumb4 == 1){
    $onesCount++;
}else {
    $twosCount++;
}

echo "Zeroes: $zeroesCount, Ones: $onesCount, Twos: $twosCount";
?>

<?php
//6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 
//ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$number = rand(1, 6);

if ($number == 1) {
    echo "<h1>$number</h1>";
}
if ($number == 2) {
    echo "<h2>$number</h2>";
}
if ($number == 3) {
    echo "<h3>$number</h3>";
}
if ($number == 4) {
    echo "<h4>$number</h4>";
}
if ($number == 5) {
    echo "<h5>$number</h5>";
}
if ($number == 6) {
    echo "<h6>$number</h6>";
}
?>

<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  
perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, 
o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->


</body>
</html>