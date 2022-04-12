<?php 
// utf kodovanie
mb_internal_encoding("UTF-8");

class Clovek extends Bytost
{

   
    public string $meno;
    protected string $priezvisko;
    public int $vek;
    private int $unava = 0;
    public $id;
    protected static $pocetLudi = 0;
    private $heslo;
    const MIN_PASS = 5;
    const MAX_PASS = 13;


    public function __construct($meno,$priezvisko,$vek,$heslo)
    {
        parent::__construct($meno,$vek);
        $this->priezvisko = $priezvisko;  
        self::$pocetLudi++;
        $this->id = self::$pocetLudi;
        $this->heslo = $heslo;
    }





    
    public function celeMeno()
    {
        return $this->meno . $this->priezvisko;
    }

    public function pozdrav()
    {
        echo'Ahoj, ja som '. $this->meno . ' | ID užívateľa: ' . $this->id;
    }

    public function spi($doba)
    {
        $this->unava -= $doba * 10;
        if ($this->unava < 0)
            $this->unava = 0;
    }

    public function behaj($vzdialenost)
    {
        if ($this->unava + $vzdialenost <= 20)
            $this->unava += $vzdialenost;
        else
            echo('Som příliš unavený, 3tí maraton už nedám :( // ');
    }

    public static function validneHeslo($heslo)
{
    return (mb_strlen($heslo) >= self::MIN_PASS);
}

    public function __toString()
    {
        return $this->meno . ' - ' . $this->id;
    }

}



