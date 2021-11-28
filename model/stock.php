<?php


class Employee{
private $name;
private $qty;

private $min_price;
private $max_price;
private $date;

public function __construct($name,$qty,$min_price,$max_price,$date){
    $this->name=$name;
    $this->qty=$qty;
    $this->min_price=$min_price;
    $this->max_price=$max_price;
    $this->date=$date;

}


//display information


function display(){
    echo "name : ". $this->name;
    echo "<br>qty : ". $this->qty;
    echo "<br>min_price : ". $this->min_price;
    echo "<br>max_price : ". $this->max_price;
    echo "<br>date : ". $this->date;
   
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