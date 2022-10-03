<?php
class fruit
{
    public $name;
    function __construct($n)
    {
        $this->name = $n;
    }

    function __destruct()
    {
        echo "fruit : {$this->name}";
    }
}
