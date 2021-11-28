<?php

class product{
private $name;
private $code;


function display(){
   
    $this->name="oil";
    $this->code="123";
 
}
function setName($name){
    $this -> name=$name;
}
function getName(){
   return $this -> name;
}

function setCode($code){
    $this -> code=$code;
}
function getCode(){
   return $this -> code;
}


}

$p1=new product();
$p1 -> display();
$p1->setName("Devid");
$p1->setCode("code");
echo $p1->getName() ."<br>" .$p1->getCode() ; 







?>