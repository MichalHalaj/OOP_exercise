<?php

abstract class Bytost
{
    public string $meno;
    public int $vek;
    private int $unava = 0;

    public function __construct($meno, $vek)
    {
        $this->meno = $meno;
        $this->vek = $vek;
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
            echo('RRRrrrrr!');
    }

    public abstract function pozdrav();

}

