<?php 

class Being 
{
    protected $name;
    protected $health;
    protected $inventory = [];
    protected $mana = 60;

    public static $deathCount = 0;

    public function getName()
    {
        return $this->name;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function __construct($name, $health, array $inventory) {
        $this->name = $name;
        $this->health = $health;
        $this->inventory = $inventory;

    }

    public function takeDmg($dmg) {
        $this->health = $this->health - $dmg;

        var_dump($this->health);

        if ( $this->health <= 0 ) {
            $this->perish();
        }
    }

    protected function perish() {
        static::$deathCount += 1;
        var_dump( $this->name . 'died');
    }

}

class Enemy extends Being {
    public function takeDmg($dmg) {
        $this->health = $this->health - $dmg;

       echo 'OOOOuuuuch!!! :(';

        if ( $this->health <= 0 ) {
            $this->perish();
        } else {
            var_dump( $this->name.' dropped '. $this->inventory['gold'].'gold.');
        }
    }
}



$hero = new Being('Michal', 90, [
    'gold' => 900, 'postion' => 863, 'axe' => 10,
]);

echo $hero->getName() . ' (' . $hero->getHealth() . 'HP)'; 

$hero->takeDmg(50);
$hero->takeDmg(50);

$enemies = [
    new Enemy('Robo', 40, ['gold' =>680, 'postion' => 803, 'axe' => 5,]), 
    new Enemy('Igor', 38, ['gold' =>880, 'postion' => 863, 'axe' => 9,]), 
];

$enemies[0]->takeDmg(10);
echo '<br>';
echo 'Zomrelo: ' . Being::$deathCount . ' bytosti | vypísane statickou metódou.';
