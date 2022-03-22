<?php 

class User {
    private $firstName;

    // metoda na nastavenie hodnoty 
    public function setName($firstName){
        $this->firstName = $firstName;
    }
    // vrátenie hodnoty
    public function getName(){
        return $this->firstName;
    }
}

$user1 = new User ();

$user1->setName("Joe");
echo $user1->getName();
