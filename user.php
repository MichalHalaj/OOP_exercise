<?php 
class User
{
public $first_name;
public $last_name;
public $email;

public function __construct($first_name, $last_name, $email) {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
}

public function return_full_name(){
    $full_name = $this->first_name . ' ' . $this->last_name;
    return $full_name;
}

}

class Admin extends User{
    public function destroy_all() {
        echo 'destory all users ' . $this->return_full_name(); 
    }
    public function return_full_name(){
        $full_name = 'Administrator ' . $this->first_name . ' ' . $this->last_name;
        return $full_name;
    }
}
$Lubo = new User('Lubo', 'Kandrac', 'lubomir.k11146@gmail.com', );
echo 'User 01.';
echo '<br>';
echo '<br>';
echo $Lubo->return_full_name();
echo '<br>';
echo $Lubo->email;
echo '<br>';
echo '<br>';

$Michal = new Admin('Michal', 'Halaj', '1michalhalaj1@gmail.com', );
echo 'User 02.';
echo '<br>';
echo '<br>';
echo $Michal->return_full_name();
echo '<br>';
echo $Michal->email;
echo '<br>';
echo $Michal->destroy_all();
