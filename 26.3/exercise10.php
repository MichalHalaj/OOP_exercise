<?php

interface User{
    public function setName($username);
    public function getName();

    public function setGender($gender);
    public function getGender();
}

class Commentator implements User{
    protected $username = '';
    protected $gender = '';

    public function setName($username){
        $this -> username = (is_string($username))? $username : 'N/A';
    }

    public function getName(){
        return $this -> username;
    }

    public function setGender($gender){
        $gendersArray = array('male', 'female');
        if(in_array($gender, $gendersArray)){
            $this -> gender = $gender;
        }
    }

    public function getGender(){
        return $this -> gender;
    }
}

function yourGender(User $user)
{
  $userName   = $user -> getName();
  $userGender = $user -> getGender();
  
  if($userGender === 'female')
  {
    return "Mrs. " . $userName;
  }
  else if($userGender === 'male')
  {
    return "Mr. " . $userName;
   }
        
  return $userName;
}

$user1 = new Commentator ();
$user1 -> setName("Michal");
$user1 -> setGender("male");

$user2 = new Commentator ();
$user2 -> setName("Maruša");
$user2 -> setGender("female");

echo yourGender($user1);
echo "<br>";
echo yourGender($user2);
