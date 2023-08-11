<?php

// property not variable    method   not function
// access modifier  => public  protected  privte
class Player
{
    public ?string $name = null;

    public Database $dbName ;
    public $position = 'FW';
    private $speed;
    protected $club;

    public const code = 101 ;

    public function getFullPlayerInfo()
    {
        return $this->name . 'my position is ' . $this->position ;
    }

    public function setName($nm)
    {
        $this->name = $nm ;
    }

    public function getName()
    {
        return $this->name;
    }

    public function test()
    {
        return self::code;
    }
}
