<?php

class User {
    public $meno;
    public $priezvisko;

    public function ahoj(){
        return "Ahojte" . $this->meno ;
    }
}
// Vytvorenie nového objektu triedy User
$user1 = new User();
// Pridanie hodnôt do atribútov
$user1->meno = 'Jonnie';
$user1->priezvisko = 'Roe';

echo  $user1->ahoj();