<?php
abstract class Template{
   public function addHOtWater()
   {
      echo "add hot water<br>";
   }
   public function addSuger()
   {
      echo "add hot Suger<br>";
   }
  
   public function addMilk()
   {
      echo "add Milk <br>";
   }
   abstract public function addIngredient();
   public function make()
   {
      
      $this->addHOtWater();
      $this->addSuger();
      $this->addIngredient();
      $this->addMilk();
   }
}

class Tea extends Template{
   
    
    public function addIngredient()
    {
       echo "add Tea<br>";
    }
   
    
}
class Coffee extends Template{
   
   
    public function addIngredient()
    {
       echo "add Coffee<br>";
    }
   
    
}
$tea=new Tea();
$tea->make();

$coffee=new Coffee();
$coffee->make();





?>