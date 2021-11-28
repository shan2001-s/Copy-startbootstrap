<?php
include_once "controller/crewcontroller.php";
$cid=$_GET["cid"];
$crewcontroller=new CrewController();
$result=$crewcontroller->showCrewInfo($cid);


?>
<?php include "master_layouts/header.php" ?>



<body>
    <style>
        input[type=button1]{
        background-color: #4CAF50;
       
        color: white;
      
      
       
     
}
    </style>
  


<form class="repeater">


  
    
    <div class=" col g-3 ">

   

    <!--<?php
    //<a class=" btn btn-success mb-3"  href="personal_details.php?cid=".$result['id']>Create <i class="fas fa-plus"></i></a>
    ?>
    <a class=" btn btn-primary mb-3" href="employee.php">Detail <i class="fas fa-info-circle"></i></a>
    <a class=" btn btn-secondary mb-3" href="employee.php">Update <i class="far fa-edit"></i></a>
    <a class=" btn btn-danger mb-3" href="employee.php">Delete <i class="fas fa-trash"></i></a>
    

    
     


  </div>$firstname,$middlename,$lastname,$father_name,$mother_name,$nationality,$birthdate,$rank,$vessel_type,$final_school,$martial_status,$waistline,$uniform_size,$blood_type,$safeshoe,$health_status,$bank_info,$tele1,$tele2,$address,$city,$english_level,$application_date,$passportno,$passportdate,$passportexpiredate,$sbookno,$sbookdate,$sbookexpire,$lincece,$lincecedate,$linceceexpire,$id,$image -->
     <?php echo "<img src='uploads_reg/".$result['image']."'style='width:30%;height:200px;'' >"; ?>
     <div class="container overflow-hidden g-2">
  <div class="row g-2 ">

    <div class="col-2">
      <div class="p-3 "><b>first Name</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["firstname"];?></div>
    </div>
    
    <div class="col-2">
      <div class="p-3 "><b>middlename</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["middlename"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>lastname</b></div>
    </div>
    <div class="col-10">
      <div class="p-3 border bg-light"><?php echo $result["lastname"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>father_name</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["father_name"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>mother_name</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["mother_name"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>nationality</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["nationality"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>birthdate</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["birthdate"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>rank</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["rank"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>vessel_type</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["vessel_type"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>final_school</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["final_school"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>martial_status</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["martial_status"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>waistline</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["waistline"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>uniform_size</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["uniform_size"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>blood_type</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["blood_type"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>safeshoe</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["safeshoe"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>health_status</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["health_status"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>bank_info</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["bank_info"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>tele1</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["tele1"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>tele2</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["tele2"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>address</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["address"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>city</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["city"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>application_date</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["application_date"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>passportno</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["passportno"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>passportdate</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["passportdate"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>passportexpiredate</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["passportexpiredate"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>sbookno</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["sbookno"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>sbookdate</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["sbookdate"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>sbookexpire</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["sbookexpire"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>lincece</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["lincece"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>lincecedate</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["lincecedate"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>linceceexpire</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["linceceexpire"];?></div>
    </div>

    <div class="col-2">
      <div class="p-3 "><b>id</b></div>
    </div>
    <div class="col-4">
      <div class="p-3 border bg-light"><?php echo $result["id"];?></div>
    </div>

    

    
    

</div>


   
</form>


                               
                                 
                             


      
</body>    
<style>
table, th, td {
  border:1px solid black;
}
</style>
                   
            <!-- End of Main Content -->
<?php include "master_layouts/footer.php" ?>

