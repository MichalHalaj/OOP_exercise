<?php 

namespace  magicWorld;

class Hero extends Being {
    public function takeDmg($dmg) {
        $this->health = $this->health - $dmg;

       echo 'OOOOuuuuch!!! :(';

        if ( $this->health <= 0 ) {
            $this->perish();
        } else {
            var_dump( $this->name.' dropped '. $this->inventory['gold'].'gold.');
        }
    }

    protected function perish() {
        var_dump( $this->name . 'died');
    }

    public function daruj()
    {
        echo($this->name . ' Vďaka funkcií daruj, daroval nepriateľom ako dobrý skutok ' . $this->inventory['gold'].'gold.');
    }
}