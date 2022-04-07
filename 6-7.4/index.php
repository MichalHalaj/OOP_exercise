<?php 

function showMeClassBejbe($trida)
{
    require("class/$trida.php");
}

spl_autoload_register("showMeClassBejbe");

mb_internal_encoding("UTF-8");

$ludia = array();
$ludia[] = new Clovek('Michal','Halaj',27,'mojeHeslo');
$ludia[] = new Clovek('Samo','Rúfus',14,'mojeHeslo');

$ludia[] = new Javista('Jan','Mičuda',26,'VS code zatiaľ','mojeHeslo');
$ludia[] = new Javista('Imrich','Zárudsky',35,'VS code zatiaľ','mojeHeslo');

foreach($ludia as $clovek)
{
    echo($clovek->pozdrav());
            echo('<br />');
}

// Hromadná genocída :D
foreach($ludia as $chudaci)
{
    $chudaci->behaj(10);
    $chudaci->behaj(10);
    echo $chudaci->celeMeno() . $chudaci->behaj(10);
    echo'<br>';
}