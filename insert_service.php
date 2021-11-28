<?php
include_once 'controller/servicecontroller.php';


if(isset($_POST["crew"]) && !empty($_POST["crew"])){
    $crew_id=$_POST['crew'];
   
  $servicecontroller=new ServiceController();
    $company=$_POST["company"];
  
    var_dump($company);
   
    $ship=$_POST["ship"];
    
    $rank=$_POST["rank"];
    $vtype=$_POST["vtype"];
    for($count=0;$count<count($company);$count++)
    {
   

        $servicecontroller->insertService($crew_id,$company[$count],$ship[$count],$rank[$count],$vtype[$count]);
       
      
    }
  
   echo $company[$count];
}



?>