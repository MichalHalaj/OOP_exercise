<?php

class Javista extends Clovek implements Programator 
{
    public $ide;

    public function __construct($meno,$priezvisko,$vek,$heslo,$ide)
    {
        $this->ide = $ide;
        parent::__construct($meno, $priezvisko, $vek, $heslo);
    }

    public function pozdrav()
{
    echo('Dobrý deň, ja si nič neobjednávam, iba dokončím jeden kód. Jsem ' . $this->meno . ' | ID užívateľa: ' . $this->id);
}

    public function programuj()
    {
        echo('Programujem v '. $this->ide);
    }


}
