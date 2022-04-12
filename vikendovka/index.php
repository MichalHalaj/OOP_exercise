<?php 

function showMeClassBejbe($trida)
{
    require("class/$trida.php");
}

spl_autoload_register("showMeClassBejbe");

/*$ludia = array();
$ludia[] = new Clovek('Michal','Halaj',27);
$ludia[] = new Clovek('Samo','Rúfus',14);

$ludia[] = new Javista('Jan','Mičuda',26,'VS code zatiaľ');
$ludia[] = new Javista('Imrich','Zárudsky',35,'VS code zatiaľ');

// Dedenie + polymorfizmus na funkciu pozdrav
foreach ($ludia as $clovek)
{
    echo($clovek . '<br>');
    if ($clovek instanceof Programator)
    {
        $clovek->programuj();
        echo('<br>');
    }
}

// Hromadná genocída :D
foreach($ludia as $chudaci)
{
    $chudaci->behaj(10);
    $chudaci->behaj(10);
    echo $chudaci->celeMeno() . $chudaci->behaj(10);
    echo'<br>';
}*/

$pes = new Pes('Bady', 5);
$clovek = new Clovek('Ivan', 'Hrubý', 10, 'morder435');
$javista = new Javista('Michal', 'Halaj', 27, 'aplly_hack_pass_NOW', 'VS Code');

$pes->pozdrav();
        echo('<br>');
        $clovek->pozdrav();
        echo('<br>');
        $javista->programuj();
