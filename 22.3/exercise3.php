<?php

class User {
    public $meno;
    public $priezvisko;

    public function ahoj(){
        echo "Ahojte" . $this->meno ;
        return $this;
    }
    public function register() {
        echo ">> registred";
        return $this;
    }
    public function mail(){
        return ">> email send";
    }
}
// Vytvorenie nového objektu triedy User
$user1 = new User();
// Pridanie hodnôt do atribútov
$user1->meno = 'Jane';
$user1->priezvisko = 'Roe';

echo  $user1->ahoj()->register()->mail();