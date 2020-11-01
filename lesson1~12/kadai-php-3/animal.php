<?php
namespace TechAcademy\communication\animals;

class Animal {
    //名前を格納するプロパティ
    public $name = "" ;
    //年齢を格納するプロパティ
    public $age = "" ;
    
    function say() {
        print $this->name . "です。" . $this->age . "歳です。" . PHP_EOL;
    }
}

/*
class Animal {
    //名前を格納するプロパティ
    public $name = "" ;
    //年齢を格納するプロパティ
    public $age = "" ;
    
    function __construct($name ,$age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    function say() {
        print $this->name . "です。" . $this->age . "歳です。" . PHP_EOL;
    }
}

$animal = new Animal("田中　太郎", 25);
$animal->say();
print_r($animal);
*/
    
