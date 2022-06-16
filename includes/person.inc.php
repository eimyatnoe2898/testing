<?php


class Person
{

    private $name;
    private $eyeColor;
    private $age;

    // public $first = "Daniel";

    public function __construct($name, $eyeCgit olor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->eyeColor = $age;

    }

    //if we want to fix the name of the perso - use setters
    public function setName($first)
    {
        $this->first = $first;

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
    public function __construct($name, $owner)
    {
        $this->owner = $owner;
        $this->name = $name;
    }

    public function showOwner()
    {
        $owner = $this->owner;
        // $ownerName = $owner->name;
        
        return $owner->name . " is my owner!";
    }

    public function getName()
    {
        $name = $this->name;
        return "My name is ". $name. "!";
    }
}