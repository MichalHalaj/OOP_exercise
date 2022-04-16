<?php

class Kalkulacka 
{
    public function sucet($a,$b)
    {
        return $a + $b;
    }

    public function rozdiel($a,$b)
    {
        return $a - $b;
    }

    public function sucin($a,$b)
    {
        return $a * $b;
    }

    public function podiel($a,$b)
    {
        if($b == 0)
        throw new Exception('Nulou sa nedelí');
        return $a / $b;
        
    } 
}