<?php
include_once "controller/crewcontroller.php";

$crewcontroller=new CrewController();
$results=$crewcontroller->showCrews_one();


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

   

    
    
    <a class=" btn btn-success mb-3" href="personal_details.php">Add <i class="far fa-edit"></i></a>
 
    

    
            
         
     </div>

   
</form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">city List Form</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            
                                            
                                          
                                           
                                          </tr>
                                     </thead>
                                    <tbody>
                                          <?php
                                          //foreach($results as $result){
                                            echo "<tr>";
                                           
                                            

                                          echo "</tr>";
                                          //}
                                          ?>
                                      </tbody> 
                                     
                                    
                                      
                                  </table>
                                 
                              </div> 
                          </div>   
</div>




       
      
</body>    
<style>
table, th, td {
  border:1px solid black;
}
</style>
                   
            <!-- End of Main Content -->
<?php include "master_layouts/footer.php" ?>



