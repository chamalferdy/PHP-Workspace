<?php

class Person
{
    // properties
    private $name;
    private $eyeColor;
    private $age;

    // constructor
    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    //methods
    // setters
    public function setName($name)
    {
        $this->name = $name;
        return $this->name;
    }
    public function setAge($age)
    {
        $this->age = $age;
        return $this->age;
    }
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;
        return $this->eyeColor;
    }

    // getters.
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    // destructor
    public function __destruct()
    {
    }
}
