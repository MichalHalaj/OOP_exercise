<?php 

namespace  magicWorld;

abstract class Being 
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

    public function setName()
    {
        $this->name = $name;
    }

    public function setHealth()
    {
        $this->health = $health;
    }

    public function __construct($name, $health, array $inventory) {
        $this->name = $name;
        $this->health = $health;
        $this->inventory = $inventory;

    }

    abstract public function takeDmg($dmg);

    abstract protected function perish();
}
