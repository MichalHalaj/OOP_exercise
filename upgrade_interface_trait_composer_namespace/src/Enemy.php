<?php 

namespace  magicWorld;

class Enemy extends Being {

    use canFly;

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

}

