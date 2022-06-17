<?php
    


class Person
{

    private $name;
    private $eyeColor;
    private $age;

    // public $first = "Daniel";

    public function __construct(string $name, string $eyeColor, int $age)
    {
        try{
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->eyeColor = $age;
        echo $this->name . $this->eyeColor. $this->age;
        }
        catch (TypeError $e)
        {
            echo "Error: ". $e->getMessage();
                }

    }

    //if we want to fix the name of the perso - use setters
    public function setName(string $first)
    {
        $this->name = $first;

    }

    public function getName()
    {
        return $this->name;
    }
    // public function owner()
    // {
    //     $a = $this->name;  //first here is a property so we do not add dollar sign here
    //     return $a;
    // }

}

class Pet
{
    public $owner;
    private $name;
    public function __construct(string $name, $owner)
    {
        $this->owner = $owner;
        $this->name = $name;
    }

    public function showOwner()
    {
        $owner = $this->owner;
        // $ownerName = $owner->name;
        
        return "My owner's name is ". $owner->getName();
    }

    public function getName()
    {
        $name = $this->name;
        return "My name is ". $name. "!";
    }
}