<?php
include_once "controller/crewcontroller.php";
include_once "controller/vesselcontroller.php";

$vesselcontroller=new VesselController();
$vessel_results=$vesselcontroller->showVessels();
$crewController=new CrewController();
$cid=$_GET["cid"];
$crew_results=$crewController->showCrews_one();
$crew_info=$crewController->showCrewInfo($cid);
/*if(isset($_POST['submit']))
{
if(empty($_POST['firstname']))
$firstname_error="Enter first name";
else {
    $firstname=$_POST["firstname"];
}
if(empty($_POST['lastname']))
$lastname_error="Enter last name";
else {
    $lastname=$_POST["lastname"];
}
$vessel_type=$_POST["vessel_type"];
/*if(empty($firstname_error) )
{
    $crewController=new CrewController();
    $result=$crewController->addCrew($firstname,$lastname,$vessel_type);
    if($result)
    {
        header("location:crew_index.php");
    }
}*/
//header("location:crew_index.php");
//}

?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Crew Service</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    
                    <div class="container">
                    <span id="success_result"></span>
                    <form method="post" id="repeater_certificate_form">
                        
                        <div class="form-group">
                            <label>Crew Name</label>
                            <select data-skip-name="true" name="crew" class="form-control">
                            <?php
                              
                                    echo "<option value='".$crew_info['crewid']."'>".$crew_info['crewid']."/...".$crew_info["firstname"]."[".$crew_info['sbookno']."]</option>";
                                   
                                
                            ?>   
                            
                                                    
                                                    
                            </select>
                        </div>
                       
                        <div id="repeater">
                            <div class="repeater-heading" align="right">
                                <button type="button" class="btn btn-primary repeater-add-btn">Add More Certificate</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="items" data-group="programming_languages">
                                <div class="item-content">
                                    <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-4">
                                        <label>expired</label>
                                                <select data-skip-name="true" data-name="certificate[]" class="form-control">
                                                <option value=" ">select</option>
                                                    <option>GMDSS ENDORSEMENT - GOC</option>
                                                    <option >GMDSS GOC - FLAG STATE</option>
                                                    <option >BASIC SAFETY TRAININE(BST)</option>
                                                    <option>PROFICIENCY IN SURVIVAL CRAFT & RESCUE BOATS</option>
                                                    <option>ARPA SIMULATOP</option>
                                                    <option>RADAR OBSERVER, PLOTTINE & SIMULATOR --</option>
                                                
                                                    
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">Issue</label>
                                                <input type="date" data-skip-name="true" data-name='issue[]' class="form-control" >
                                            </div>
                                            <div class="col-md-2">
                                                <label class="form-label">number</label>
                                                <input type="number" data-skip-name="true" data-name='number[]' class="form-control">
                                            </div>
                                            <div class="col-md-2">
                                                <label>expired</label>
                                                <input type="date" data-skip-name="true" data-name='expired[]' class="form-control" >
                                            </div>
                                            <div class="col-md-2" style="margin-top:24px;" align="center">
                                                <button id="remove-btn" onclick="$(this).parents('.items').remove()" class="btn btn-danger">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group" align="center">
                            <br /><br />
                            <input type="submit" name="insert" class="btn btn-success" value="Save" />
                        </div>
                    </form>
                </div>
                    </form>
                    

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
 <?php 
session_destroy();
?>
<?php include "master_layouts/footer.php";?>