<?php

/*
Static Properties and Methods :: Creating a property or a method inside a class, that can simply access without creating an object from that class.These are used differently that the usual methods and properties inside a class.
*/

/**
 * static properties and methods are used when you want to create objects and methods,that don't have to be a part of an object.It doesn't have to be in there.
 */


class Person
{
    // properties
    private $name;
    private $eyeColor;
    private $age;

    // ########## All the objects that are created from this class have a common property that is drinkingage and this is universal for all the objects. This is not essential to make a part of an object.
    public static $drinkingAge = 21;

    public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    // public function setAge($age)
    // {
    //     $this->age = $age;
    // }
    // public function setEyeColor($eyeColor)
    // {
    //     $this->eyeColor = $eyeColor;
    // }

    public function getName()
    {
        return $this->name;
    }

    // public function getAge()
    // {
    //     return $this->age;
    // }

    // public function getEyeColor()
    // {
    //     return $this->eyeColor;
    // }

    public static function setDrinkingAge($newDA)
    {
        self::$drinkingAge = $newDA;
    }

    // static means we can access it from anywhere.We can access the drinkingage property from the getDA() regular method.
    public function getDA()
    {
        return self::$drinkingAge; // we use self:: to refer to the class when using static properties.It's like -> in normal properties.
    }
    // we can access static properties from the regular non-static methods.
}
