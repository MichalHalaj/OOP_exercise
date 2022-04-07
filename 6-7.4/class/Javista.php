<?php

class Javista extends Clovek 
{
    public string $ide;

    public function __construct($meno,$priezvisko,$vek,$ide,$heslo)
    {
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;  
        $this->vek = $vek;
        $this->ide = $ide;
        self::$pocetLudi++;
        $this->id = self::$pocetLudi;
        $this->heslo = $heslo;
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