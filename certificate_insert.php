<?php
include_once 'controller/certificatecontroller.php';


if(isset($_POST["crew"]) && !empty($_POST["crew"])){
    $crew_id=$_POST['crew'];
 
  $certificatecontroller=new ServiceController();
    $certificate=$_POST["certificate"];
  
    var_dump($certificate);
   
    $issue=$_POST["issue"];
    
    $number=$_POST["number"];
    $expired=$_POST["expired"];
    for($count=0;$count<count($certificate);$count++)
    {
   

        $certificatecontroller->insertCertificate($crew_id,$certificate[$count],$issue[$count],$number[$count],$expired[$count]);
       
      
    }
  
  
}



?>