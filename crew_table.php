<?php
include_once "controller/crewcontroller.php";
include_once "controller/vesselcontroller.php";

$crewcontroller=new CrewController();
$results=$crewcontroller->showCrews_one();

$vesselcontroller=new VesselController();
$vesel_results=$vesselcontroller->showVessels();

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
                            <h6 class="m-0 font-weight-bold text-primary">List Form</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                          
                                            <th>First Name</th>
                                            <th>middle Name</th>
                                            <th>last Name</th>
                                            <th>nationality</th>
                                            <th>rank</th>
                                            <th>vessel_type</th>
                                            <th>Lincence Photo</th>
                                            <th>Actions</th>
                                            
                                          
                                           
                                          </tr>
                                     </thead>
                                    <tbody id="tbody">
                                          <?php
                                          foreach($results as $result){
                                            echo "<tr>";
                                          
                                            echo "<td>" . $result['firstname']."</td>";
                                            echo "<td>" . $result['middlename']."</td>";
                                            echo "<td>" . $result['lastname']."</td>";
                                            echo "<td>" . $result['nationality']."</td>";
                                            echo "<td>" . $result['rank']."</td>";
                                            $v_result=$vesselcontroller->getVessel($result['vessel_type']);
                                            echo "<td>" . $v_result["name"]."</td>";
                                          // echo "<td>" . $result['vessel_type']."</td>";
                                            echo "<td><img src='uploads_reg/".$result['image']."' width='80' height='80'></td>";
                                            echo "<td cid=".$result['crewid']."><a href='crew_detail.php?cid=". $result['crewid'] ."' class='btn btn-info mx-2s'>Read</a><a href='crew_edit.php?cid=". $result['crewid'] ."' class='btn btn-warning mx-2'>Edit</a><a href='service_create.php?cid=". $result['crewid'] ."' class='btn btn-info mx-2s'>Service</a> <a href='certificate_create.php?cid=". $result['crewid'] ."' class='btn btn-info mx-2s'>certificate</a> <a class='btn btn-danger delete' ><i class='fa fa-trash'></i></a></td>";
                                           
                                           // echo "<td>". $result['image']."</td>";
                                            

                                          echo "</tr>";
                                          }
                                          ?>
                                      </tbody> 
                                     
                                    
                                      
                                  </table>
                                 
                              </div> 
                          </div> 
                          <?php  
                          echo "<div class='col-md-4'>";
                                 echo " <label class='form-label'>Vessel Type</label>";
                                  echo " <select class='form-select' name='vessel_type'  >";
                               foreach($vesel_results as $vresult)
                               {   
                                   
                                    echo "<option  value=".$vresult["id"].">".$vresult["name"]."</option>";
                                    
                                
                                }
                                echo " </select>";
                                echo "   </div>";
                                ?>
</div>



<td>

       
      
</body>    
<style>
table, th, td {
  border:1px solid black;
}
</style>
                   
            <!-- End of Main Content -->
<?php include "master_layouts/footer.php" ?>



