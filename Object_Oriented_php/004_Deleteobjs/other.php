<?php

class Newclass
{
    // properties and methods
    public $data = "this is a property.";
    public function __construct()
    {
        echo "this class has been instantiated. <br>";
    }
    public function setNewProperty($newdata)
    {
        $this->data = $newdata;
    }

    public function getProperty()
    {
        return $this->data;
    }

    public function __destruct()
    {
        echo "<br> This is the end of the class!";
    }

    public function info()
    {
        echo "I have " . $this->data;
    }
}
