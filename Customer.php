<?php


class Customer
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function checkAge(){
        if ($this->age >= 18){
            return true;
        } else{
            return false;
        }
    }
}