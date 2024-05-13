<?php 
    namespace Src\Firstpackage;

class FirstName{
    public string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function length():int
    {
        return strlen($this->name);
    }
}