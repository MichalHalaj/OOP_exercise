<?php 
    abstract class User{
    protected $username;

    public function setName($username){
        $this -> username = $username;
     }

    public function getName(){
        return $this -> username;
    }
    abstract public function stateYourRole();
}

class Admin extends User{
    public function stateYourRole(){
        return "admin";
    }
}

class Viewer extends User {
    public function stateYourRole()
    {
      return strtolower(__CLASS__);
    }
  }

  $admin1 = new Admin();
$admin1 -> setName("Balthazar");
echo $admin1 -> stateYourRole();