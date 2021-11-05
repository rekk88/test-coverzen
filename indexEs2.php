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

class SpecialStudent extends Student{
  public $favoriteColor;

  function __construct($name,$surname,$age,$favoriteColor){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->favoriteColor = $favoriteColor;
  }

  function get_color(){
    return $this->favoriteColor;
  }

}

//create new Student
$student1 = new Student("franco","pincopallo",14);

//print is info
echo "name : " . $student1->get_name() . "  |  surname : " . $student1->get_surname() . "\n";

//create new Special Student
$student2 = new SpecialStudent("gianni","nanni",16,"orange");
echo " || ";
//print Special Student info
echo "name : " . $student2->get_name() . "  |  surname : " . $student2->get_surname() . "  favorite color : " . $student2->get_color();


?>