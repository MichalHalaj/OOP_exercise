<?php 

require 'vendor/autoload.php';

use magicWorld\Hero;
use magicWorld\Enemy;


$hero = new Hero('Michal', 90, [
    'gold' => 900, 'postion' => 863, 'axe' => 10,
]);

echo $hero->getName() . ' (' . $hero->getHealth() . 'HP)'; 
echo'<br>';

$hero->takeDmg(50);
echo'<br>';
$hero->takeDmg(50);
echo'<br>';
$hero->daruj();
echo'<br>';

$enemies = [
    new Enemy('Robo', 40, ['gold' =>680, 'postion' => 803, 'axe' => 5,]), 
    new Enemy('Igor', 38, ['gold' =>880, 'postion' => 863, 'axe' => 9,]), 
];

$enemies[0]->takeDmg(10);
echo'<br>';
$enemies[1]->fly();
