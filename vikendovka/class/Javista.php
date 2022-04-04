<?php

class Javista extends Clovek 
{
    public string $ide;

    public function __construct($meno,$priezvisko,$vek,$ide)
    {
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;  
        $this->vek = $vek;
        $this->ide = $ide;
    }

    public function pozdrav()
{
    echo('Dobrý deň, ja si nič neobjednávam, iba dokončím jeden kód. Jsem ' . $this->meno);
}

    public function programuj()
    {
        echo('Programujem v '. $this->ide);
    }


}