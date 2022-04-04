<?php 

class Clovek
{

   
    protected string $meno;
    protected string $priezvisko;
    protected int $vek;
    private int $unava = 0;


    public function __construct($meno,$priezvisko,$vek)
    {
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;  
        $this->vek = $vek;
    }
    
    public function celeMeno()
    {
        return $this->meno . $this->priezvisko;
    }

    public function pozdrav()
    {
        echo'Ahoj, ja som '. $this->meno;
    }

    public function spi($doba)
    {
        $this->unava -= $doba * 10;
        if ($this->unava < 0)
            $this->unava = 0;
    }

    public function behaj($vzdalenost)
    {
        if ($this->unava + $vzdalenost <= 20)
            $this->unava += $vzdalenost;
        else
            echo('Som příliš unavený, 3tí maraton už nedám :( // ');
    }

}



