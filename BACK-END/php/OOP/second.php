
<?php
class second extends first
{
    private $job = 'developing';

    public function setMsg($msg)
    {
        echo "tesing {$msg}";
        $this->intro();
    }

    public function intro()
    {
        echo "my name is {$this->name} and my job is {$this->job}";
    }
}
