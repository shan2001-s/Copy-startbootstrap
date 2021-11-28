<?php

include "controller/crewcontroller.php";
if(isset($_POST['submit']))
{
  

    if(empty($_POST['name']))
    $name_error="Enter  name";
    else{
        $name=$_POST['name'];
    }

   



    if(empty($name_error) )
    //if(empty($firstname_error))
    {
        $crewController=new CrewController();
        $result=$crewController->addVessel($name);
    } 
}

?>





<body>


<div>


    </div>
</body>

<?php include "master_layouts/header.php" ?>


<!DOCTYPE html>
<header>
    <title>
        Personal Details
    </title>
    
</header>
<body>
       
  


       
        <form class="row g-2 "  method="post" >
        
    
        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Person Name*:</label>
            <input type="text" name="name" class="form-control" id="inputText" placeholder="Enter  Name" >
            <span class="text-danger"><?php if(isset($name_error)) echo $tname_error;?>  </span>
           
        </div>
        
       

         
         <!--<input type="submit" name="submit" value="Upload">-->
         <button type="submit" name="submit" class="btn btn-success ">submit</button>
        <button type="submit" class="btn ">cancel</button>

        

   
</form>
    




        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="jquery/jquery-3.6.0.min.js"></script>
      
        <script src="java_script/sea_services.js"></script>
</body>
<?php include "master_layouts/footer.php" ?>