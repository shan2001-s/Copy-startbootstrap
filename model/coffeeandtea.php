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
      echo "add Milk<br>";
   }
   abstract public function addIngredient();
   public function make()
   {
      
      $this->addHOtWater();
      $this->addSuger();
     
      $this->addMilk();
   }
}

class Tea{
   
    public function addHOtWater()
    {
       echo "add hot water<br>";
    }
    public function addSuger()
    {
       echo "add hot Suger<br>";
    }
    public function addTea()
    {
       echo "add Tea<br>";
    }
    public function addMilk()
    {
       echo "add Milk<br>";
    }
    public function make()
    {
       
       $this->addHOtWater();
       $this->addSuger();
       $this->addTea();
       $this->addMilk();
    }
    
}
class Coffee{
   
    public function addHOtWater()
    {
       echo "add hot water<br>";
    }
    public function addSuger()
    {
       echo "add hot Suger<br>";
    }
    public function addCoffee()
    {
       echo "add Tea<br>";
    }
    public function addMilk()
    {
       echo "add Milk<br>";
    }
    public function make()
    {
        $this ->addHOtWater();
      
        $this->addSuger();
        $this->addCoffee();
        $this->addMilk();
    }
    
}
$tea=new Tea();
$tea->make();





?>