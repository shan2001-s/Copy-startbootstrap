<?php

//variable
/*
class Employee{
public $name;
public $ei;
private $dept;*/
class Employee{
private $name;
private $ei;
private $dept;
private $baxicsalary;
private $percentage;
public function __construct($name,$dept,$basicsalary){
    $this->name=$name;
    $this->dept=$dept;
    $this->basicsalary=$basicsalary;

}


//display information


function display(){
    echo "name : ". $this->name;
    echo "<br>dept : ". $this->dept;
    echo "<br>basicsalary : ". $this->basicsalary;
}
function setName($name){
    $this -> name=$name;
}
function getName(){
   return $this -> name;
}

function setBasicsalary($salary){
$this->basicsalary=$salary;
}

function getBasicsalary($salary){
    return $this->basicsalary;
}
function getBonus($percentage)
{
    return $this->basicsalary * ($percentage/100);
}

}
//create an object
$emp1=new Employee("david","It","500000");
$emp1 -> display();
$emp1->setName("Devid");
echo $emp1->getName();

$emp1->setBasicsalary(300000);
echo  $emp1->getBonus(15);


?>