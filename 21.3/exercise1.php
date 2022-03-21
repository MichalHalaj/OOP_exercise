<?php

class User {
    public $meno;
    public $priezvisko;

    public function ahoj(){
        return "Ahojte" ;
    }
}
// Vytvorenie nového objektu triedy User
$user1 = new User();
$user2 = new User();
// Pridanie hodnôt do atribútov
$user1->meno = 'John';
$user1->priezvisko = 'Doe';
$ahoj =  $user1->ahoj();
$user2->meno = 'Andy';
$user2->priezvisko = 'Dandy';
$ahoj =  $user2->ahoj();

echo  $ahoj . ' ' . $user1->meno . ' ' . $user1->priezvisko;
echo '<br>';
echo  $ahoj . ' ' . $user2->meno . ' ' . $user2->priezvisko;