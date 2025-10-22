<?php

/* abstract class AchievementType{
    public function name(){
        $class = (new ReflectionClass($this)) -> getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }
    public function icon(){
        return strtolower(str_replace(' ', '-', $this-> name())).'.png';
    }
    abstract public function qualifier($user);
}

class ReachTop extends AchievementType{
    function qualifier($user){
        return $user;
    }
}

/* class AchievementType{
    public function name(){
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }
    public function icon(){
        return strtolower (str_replace(' ', '-', $this -> name())).'.png';
    }
}

class FirstThousandPoints extends AchievementType {
    public function qualifier(){
        return 'name';
    }
}

class FirstRightAnswer extends AchievementType {
    public function qualifier(){
        return 'name';
    }
}


$achievement = new ReachTop();
echo $achievement -> icon(); 
echo $achievement -> name(); 
echo $achievement -> qualifier('zain');  */

class Person {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function job(){
        return 'Software Developer';
    }
    public function age(){

    }
}

$person1 = new Person("Bob");
var_dump($person1 -> job());