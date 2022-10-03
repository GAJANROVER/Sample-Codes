<?php
class first
{
    public $name;
    private $age;
    protected $address;

    public function __construct($nam)
    {
        $this->name = $nam;
    }

    public function setName()
    {
        echo "My name is {$this->name} ROVER";
    }

    protected function intro()
    {
        echo "My name is {$this->name} ROVER";
    }

    private  function age($age)
    {
        echo $age;
    }

    protected  function address($address)
    {
        echo $address;
    }

    const bye = 'Thanks';
}
