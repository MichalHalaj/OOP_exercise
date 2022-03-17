<?php 

namespace magicWorld;

trait canFly 
{
    public function fly() 
    {
        var_dump( strtoupper( $this->name ) . 'YEEEaaaaa, i can FLYYYYY!!');
    }
}