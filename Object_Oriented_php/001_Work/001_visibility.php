<?php
// possibility of having more than 1 classes in 1 document.
class Person
{
    private $age = 23;
    protected $name  = "chamal";
    public $civilStatus = "Unmarried.";

    public function info()
    {
        $category = $this->age; // accessing the private property inside a class.
        $namefetch = $this->name;
        return $category . "<br>" . $namefetch . "<br>";
    }
}

class Child extends Person
{
    public function childinfo()
    {
        $a = $this->name;
        $cs = $this->civilStatus;
        return $a . "<br>" . $cs . "<br>";
    }
}

class Animal
{
    public $name = "animal";
    private $genetics = "don't know";
    protected $type = "mammal";
    public function info()
    {
        $category = "Wild Animal";
        return $category;
    }
}

class Pet extends Animal
{
    public function petinfo()
    {
        $inf = $this->type;
        return $inf;
    }
}
