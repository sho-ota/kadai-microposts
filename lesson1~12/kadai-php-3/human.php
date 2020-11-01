<?php
namespace TechAcademy\communication\animals;

require_once "animal.php";
require_once "thinkable.php";

class Human extends Animal {
    use Thinkable;
    
    public $like_to_do = "" ;
    
    function __construct($name, $age, $like_to_do) {
        $this->name = $name;
        $this->age = $age;
        $this->like_to_do = $like_to_do;
    }
    
}