<?php

class Student {
  // properties
  public $name;
  public $surname;
  public $age;

  // constuctor
  function __construct($name,$surname,$age){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;

  }
  // getter
  function get_name(){
    return $this->name;
  }
  function get_surname(){
    return $this->surname;
  }
  function get_age(){
    return $this->age;
  }

  
}

$student1 = new Student("franco","pincopallo",14);


echo "name : " . $student1->get_name() . "  |  surname : " . $student1->get_surname();

?>