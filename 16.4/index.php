<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once('Kalkulacka.php');

$kalkulacka = new Kalkulacka();
try 
{
$vysledok = $kalkulacka->podiel(50,0);
echo 'Výsledok je: ' . $vysledok;
echo '<br>';
}
catch (Exception $e)
{
echo 'Došlo k chybe ' . $e->getMessage();
echo '<br>';
}
echo 'Ďakujeme za využitie našej kalkulačky :) ';
?>
</body>
</html>