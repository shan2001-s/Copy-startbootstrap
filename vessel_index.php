<?php
include_once "controller/crewcontroller.php";

$crewcontroller=new CrewController();
$results=$crewcontroller->showVessels_list();


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

   

    
    
    <a class=" btn btn-success mb-3" href="vessel_create.php">Add <i class="far fa-edit"></i></a>
 
    

    
            
         
     </div>

   
</form>

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Vessel Type</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Vessel Name</th>
                                            <th>Actions</th>
                                            
                                          
                                           
                                          </tr>
                                     </thead>
                                    <tbody id="tbody">
                                          <?php
                                          foreach($results as $result){
                                            echo "<tr>";
                                            echo "<td>" . $result['name']."</td>";
                                            
                                            echo "<td cid=".$result['id']."> <a href='crew_detail.php?cid=".$result['id']." ' class='btn btn-info'>Read</a>   <a href='vessel_edit.php?cid=".$result['id']." ' class='btn btn-info'>Edit</a> <button class='btn btn-danger delete'>X</button></td>";
                                           
                                           // echo "<td>". $result['image']."</td>";
                                            

                                          echo "</tr>";
                                          }
                                          ?>
                                      </tbody> 
                                     
                                    
                                      
                                  </table>
                                 
                              </div> 
                          </div>   
</div>



<td>
<img src="uploads/glass4.jpg" width="80" height="80">
                                        </td>
       
      
</body>    
<style>
table, th, td {
  border:1px solid black;
}
</style>
                   
            <!-- End of Main Content -->
<?php include "master_layouts/footer.php" ?>



