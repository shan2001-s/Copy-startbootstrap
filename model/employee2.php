<?php


class Employee{
private $name;
private $position;

private $baxicsalary;
private $percentage;

public function __construct($name,$position,$basicsalary){
    $this->name=$name;
    $this->position=$position;
    $this->basicsalary=$basicsalary;

}


//display information


function display(){
    echo "name : ". $this->name;
    echo "<br>position : ". $this->position;
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

$emp1=new Employee("Myat Thiri","PE","500000");
$emp1 -> display();
$emp1->setName("Myat thiri");
echo $emp1->getName();

$emp1->setBasicsalary(650000);
echo $emp1->getBonus(2.5);


?>