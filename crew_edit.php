<?php

include_once "controller/crewcontroller.php";
include_once "controller/vesselcontroller.php";

$vesselcontroller= new VesselController();
$vesel_results=$vesselcontroller->showVessels();
$cid=$_GET["cid"];
$crewController=new CrewController();
$crew_info=$crewController->showCrewInfo($cid);
if(isset($_POST['submit']))
{
  

    if(empty($_POST['firstname']))
    $firstname_error="Enter first name";
    else{
        $firstname=$_POST['firstname'];
    }

    if(empty($_POST['middlename']))
    $middlename_error="Enter middle name";

    else{
        $middlename=$_POST['middlename'];
    }

    if(empty($_POST['lastname']))
    $lastname_error="Enter last name";

    else{
        $lastname=$_POST['lastname'];
    }
    
    if(empty($_POST['father_name']))
    $father_name_error="Enter father name";

    else{
        $father_name=$_POST['father_name'];
    }

    if(empty($_POST['mother_name']))
    $mother_name_error="Enter mother name";

    else{
        $mother_name=$_POST['mother_name'];
    }

    if(empty($_POST['nationality']))
    $nationality_error="Enter nationality ";

    else{
        $nationality=$_POST['nationality'];
    }

    if(empty($_POST['birthdate']))
    $birthdate_error="Enter birthdate";
    else{
        $birthdate=$_POST['birthdate'];
    }

    if(empty($_POST['rank']))
    $rank_error="Enter rank";
    else{
        $rank=$_POST['rank'];
    }

    if(empty($_POST['vessel_type']))
    $vessel_type_error="Enter vessel_type'";
    else{
        $vessel_type=$_POST['vessel_type'];
    }

    if(empty($_POST['final_school']))
    $final_school_error="Enter final name";
    else{
        $final_school=$_POST['final_school'];
    }

    if(empty($_POST['martial_status']))
    $martial_status_error="Enter martial_status";
    else{
        $martial_status=$_POST['martial_status'];
    }

    if(empty($_POST['waistline']))
    $waistline_error="Enter waistline";
    else{
        $waistline=$_POST['waistline'];
    }

    if(empty($_POST['uniform_size']))
    $uniform_size_error="Enter uniform_size";
    else{
        $uniform_size=$_POST['uniform_size'];
    }

    if(empty($_POST['blood_type']))
    $blood_type_error="Enter blood_type";
    else{
        $blood_type=$_POST['blood_type'];
    }

    if(empty($_POST['safeshoe']))
    $safeshoe_error="Enter safeshoe";
    else{
        $safeshoe=$_POST['safeshoe'];
    }

    if(empty($_POST['health_status']))
    $health_status_error="Enter health_status";
    else{
        $health_status=$_POST['health_status'];
    }

    if(empty($_POST['bank_info']))
    $bank_info_error="Enter bank_info";
    else{
        $bank_info=$_POST['bank_info'];
    }

    if(empty($_POST['tele1']))
    $tele1_error="Enter telephone1";
    else{
        $tele1=$_POST['tele1'];
    }

    if(empty($_POST['tele2']))
    $tele2_error="Enter tele2";
    else{
        $tele2=$_POST['tele2'];
    }

    if(empty($_POST['address']))
    $address_error="Enter address";
    else{
        $address=$_POST['address'];
    }

    if(empty($_POST['city']))
    $city_error="Enter city";
    else{
        $city=$_POST['city'];
    }

    if(empty($_POST['english_level']))
    $english_level_error="Enter english_level";
    else{
        $english_level=$_POST['english_level'];
    }

    if(empty($_POST['application_date']))
    $application_date_error="Enter application_date";
    else{
        $application_date=$_POST['application_date'];
    }

    if(empty($_POST['passportno']))
    $passportno_error="Enter passportno";
    else{
        $passportno=$_POST['passportno'];
    }

    if(empty($_POST['passportdate']))
    $passportdate_error="Enter passportdate";
    else{
        $passportdate=$_POST['passportdate'];
    }

    if(empty($_POST['passportexpiredate']))
    $passportexpiredate_error="Enter passportexpiredate";
    else{
        $passportexpiredate=$_POST['passportexpiredate'];
    }

    if(empty($_POST['sbookno']))
    $sbookno_error="Enter sbookno";
    else{
        $sbookno=$_POST['sbookno'];
    }

    if(empty($_POST['sbookdate']))
    $sbookdate_error="Enter sbookdate";
    else{
        $sbookdate=$_POST['sbookdate'];
    }

    if(empty($_POST['sbookexpire']))
    $sbookexpire_error="Enter sbookexpire";
    else{
        $sbookexpire=$_POST['sbookexpire'];
    }

    if(empty($_POST['lincece']))
    $lincece_error="Enter lincece";
    else{
        $lincece=$_POST['lincece'];
    }

    if(empty($_POST['lincecedate']))
    $lincecedate_error="Enter lincecedate";
    else{
        $lincecedate=$_POST['lincecedate'];
    }

    if(empty($_POST['linceceexpire']))
    $linceceexpire_error="Enter linceceexpire";
    else{
        $linceceexpire=$_POST['linceceexpire'];
    }

    if(empty($_POST['id']))
    $id_error="Enter your ID";
    else{
        $id=$_POST['id'];
    }

    if(empty($_POST['image']))
    $image_error="Choose your lincece photo";
    else{
        $image=$_POST['image'];
    }



    if(empty($firstname_error) && empty($lastname_error) )
    //if(empty($firstname_error))
    {
        $crewController=new CrewController();
        $result=$crewController->editCrew($cid,$firstname,$lastname,$image);
       // $result=$crewController->addCrew($firstname);
       if($result){
           header("location:crew_table.php");
       }
    }
}

?>



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
            <input type="text" name="firstname" class="form-control" id="inputText" placeholder="Enter Person Name" value="<?php echo $crew_info["firstname"] ?>" >
            <span class="text-danger"><?php if(isset($firstname_error)) echo $firstname_error;?>  </span>
           
        </div>
        <div class="col-md-4   p-3">
            <label for="inputText" class="form-label">Middle Name*:</label>
            <input type="text" name="middlename" class="form-control" id="inputText" placeholder="Enter Middle Name" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($middlename_error)) echo $middlename_error;?>  </span>
        </div>
        <div class="col-md-4   p-3">
            <label for="inputText" class="form-label">Surn Name*:</label>
            <input type="text" name="lastname" class="form-control" id="inputText" placeholder="Enter last Name" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($lastname_error)) echo $lastname_error;?>  </span>
        </div>

        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Father Name*:</label>
            <input type="text" name="father_name" class="form-control" id="inputText" placeholder="Enter Father Name" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($father_name_error)) echo $father_name_error;?>  </span>
        </div>
        <div class="col-md-4  p-3">
            <label for="inputText" class="form-label">Mother Name*:</label>
            <input type="text" name="mother_name" class="form-control" id="inputText" placeholder="Enter Mother Name" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($mother_name_error)) echo $mother_name_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Nationlity*:</label>
            <input type="text" name="nationality" class="form-control" id="inputText" placeholder="Enter Nationlity" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($nationality_error)) echo $nationality_error;?>  </span>
        </div>

        <div class="col-md-4 p-3">
            <label for="inputNumber" class="form-label">Age*:</label>
            <input type="number"  class="form-control" id="inputText" placeholder="0">
        </div>
        <div class="col-md-4   p-3">
            <label for="inputText" class="form-label">Rank:</label>
            <input type="text" name="rank" class="form-control" id="inputText" placeholder="Enter Rank:" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($rank_error)) echo $rank_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Applied vessel type*:</label>
            <input type="text" class="form-control" id="inputText" placeholder="Enter Applied vessel type" value="<?php echo $crew_info["middlename"] ?>">
          

        </div>
        
        
        <div class="col-md-4 p-3">
            <label for="inputdate" class="form-label">Birth:</label>
            <input type="date" name="birthdate" class="form-control" placeholder="Birth" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($birthdate_error)) echo $birthdate_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputState" class="form-label">Proposed Vsl*:</label>
            <select id="inputState" class="form-select" name="vessel_type" >
            <?php
                                foreach($vesel_results as $vresult)
                                {
                                    echo "<option value=".$vresult['name'].">".$vresult["name"]."</option>";
                                }
                                ?>
            </select>
            <span class="text-danger"><?php if(isset($vessel_type_error)) echo $vessel_type_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Final School*:</label>
            <input type="text" name="final_school" class="form-control" id="inputText" placeholder="Enter Final School" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($final_school_error)) echo $final_school_error;?>  </span>
        </div>

        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Martial Status:</label>
            <input type="text" name="martial_status" class="form-control" id="inputText" placeholder="Enter Martial Status" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($martial_status_error)) echo $martial_status_error;?>  </span>
        </div>
        <div class="col-md-4   p-3">
            <label for="inputText" class="form-label">Telephone 1:</label>
            <input type="text" name="tele1" class="form-control" id="inputText" placeholder="Enter Telephone 1" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($tele1_error)) echo $tele1_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Telephone 2:</label>
            <input type="text" name="tele2" class="form-control" id="inputText" placeholder="Enter Telephone 2" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($tele2_error)) echo $tele2_error;?>  </span>
        </div>

        <div class="col-md-6 p-3">
            <label for="inputText" class="form-label">Home Address:</label>
            <input type="text" name="address" class="form-control" id="inputText" placeholder="Enter Home Address" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($address_error)) echo $address_error;?>  </span>
        </div>
        <div class="col-md-3   p-3">
            <label for="inputnumber" class="form-label">Net Waistline (kg/lb)</label>
            <input type="number" name="waistline" class="form-control" id="inputText" placeholder="0" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($waistline_error)) echo $waistline_error;?>  </span>
        </div>
        <div class="col-md-3 p-3">
            <label for="inputState" class="form-label">City*:</label>
            <select id="inputState" name="city" class="form-select" value="<?php echo $crew_info["middlename"] ?>">
            <option selected>Yangon</option>
            <option>Mandaly</option>
            <option>Bago</option>
            <option>Bagan</option>
            </select>
            <span class="text-danger"><?php if(isset($city_error)) echo $city_error;?>  </span>
        </div>

        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">English Capability:</label>
            <input type="text" name="english_level" class="form-control" id="inputText" placeholder="Enter English Capability" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($english_level_error)) echo $english_level_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputdate" class="form-label">Apply Date:</label>
            <input type="date" name="application_date" class="form-control" placeholder="Apply Date" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($application_date_error)) echo $application_date_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Next of kin:</label>
            <input type="text" class="form-control" id="inputText" placeholder="Enter Next of kin" value="<?php echo $crew_info["middlename"] ?>" >
        </div>

        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Passport No:</label>
            <input type="text" name="passportno" class="form-control" id="inputText" placeholder="Enter Passport No" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($passportno_error)) echo $passportno_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputdate" class="form-label">Passport Date:</label>
            <input type="date" name="passportdate" class="form-control" placeholder="Passport Date" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($passportdate_error)) echo $passportdate_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputdate" class="form-label">Passport Expire Date:</label>
            <input type="date" name="passportexpiredate" class="form-control" placeholder="Passport Expire Date" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($passportexpiredate_error)) echo $passportexpiredate_error;?>  </span>
        </div>

        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">S Book No:</label>
            <input type="text" name="sbookno" class="form-control" id="inputText" placeholder="Enter S Book  No" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($sbookno_error)) echo $sbookno_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputdate" class="form-label">S Book  Date:</label>
            <input type="date" name="sbookdate" class="form-control" placeholder="S Book  Date" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($sbookdate_error)) echo $sbookdate_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputdate" class="form-label">S Book  Expire Date:</label>
            <input type="date" name="sbookexpire" class="form-control" placeholder="S Book  Expire Date" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($sbookexpire_error)) echo $sbookexpire_error;?>  </span>
        </div>  
        
        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Licence No:</label>
            <input type="text" name="lincece" class="form-control" id="inputText" placeholder="Enter Licence No" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($lincece_error)) echo $lincece_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputdate" class="form-label">Licence Date:</label>
            <input type="date" name="lincecedate" class="form-control" placeholder="Licence Date" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($lincecedate_error)) echo $lincecedate_error;?>  </span>
        </div>
        <div class="col-md-4 p-3">
            <label for="inputdate" class="form-label">Licence Expire Date:</label>
            <input type="date" name="linceceexpire" class="form-control" placeholder="Licence Expire Date" value="<?php echo $crew_info["middlename"] ?>" >
            <span class="text-danger"><?php if(isset($linceceexpire_error)) echo $linceceexpire_error;?>  </span>
        </div>


        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Licence No:</label>
            <input type="text" class="form-control" id="inputText" placeholder="Enter Licence No" value="<?php echo $crew_info["middlename"] ?>">
         
        </div>
        <div class="col-md-2 p-3">
            <label for="inputState" class="form-label">Uniform Size*:</label>
            <select id="inputState" name="uniform_size"  class="form-select" value="<?php echo $crew_info["middlename"] ?>">
            <option selected>XL</option>
            <option>L</option>
            <option>S</option>
            <option>XXL</option>

            </select>
            <span class="text-danger"><?php if(isset($uniform_size_error)) echo $uniform_size_error;?>  </span>
        </div>
        <div class="col-md-2 p-3">
            <label for="inputState" class="form-label">Blood Type:</label>
            <select id="inputState" name="blood_type" class="form-select" value="<?php echo $crew_info["middlename"] ?>">
            <option selected>A</option>
            <option>B</option>
            <option>O</option>
            <option>AB</option>
            </select>
            <span class="text-danger"><?php if(isset($blood_type_error)) echo $blood_type_error;?>  </span>
        </div>
        <div class="col-md-2 p-3">
            <label for="inputNumber" class="form-label">Safe Shoe:</label>
            <input type="number" name="safeshoe" class="form-control" id="inputText" placeholder="0" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($safeshoe_error)) echo $safeshoe_error;?>  </span>
        </div>
        <div class="col-md-2 p-3">
            <label for="inputNumber" class="form-label">Heignt(cm):</label>
            <input type="number" class="form-control" id="inputText" placeholder="0" value="<?php echo $crew_info["middlename"] ?>">
        </div>

        <div class="col-md-4 p-3">
            <label for="inputText" class="form-label">Nok relationship:</label>
            <input type="text" class="form-control" id="inputText" placeholder="Enter LNok relationship" value="<?php echo $crew_info["middlename"] ?>">
        </div>
        <div class="col-md-6 p-3">
            <label for="inputText" class="form-label">Health Inspection:</label>
            <input type="text" name="health_status" class="form-control" id="inputText" placeholder="Enter Health Inspection" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($health_status_error)) echo $health_status_error;?>  </span>
        </div>
        <div class="col-md-2 p-3">
            <label for="inputState" class="form-label">Status*:</label>
            <select id="inputState"  class="form-select" value="<?php echo $crew_info["middlename"] ?>">
            <option selected>PR</option>
            <option>AB</option>
            <option>CD</option>
            <option>EF</option>
            </select>
          
        </div>

        <div class="col-md-7 p-3">
            <label for="inputText" class="form-label">Bank Info:</label>
            <input type="text" name="bank_info" class="form-control" id="inputText" placeholder="Enter Bank Info" value="<?php echo $crew_info["middlename"] ?>">
            <span class="text-danger"><?php if(isset($bank_info_error)) echo $bank_info_error;?>  </span>
        </div>

        
        
        <div class="form-group">
            <label for="exampleFormControlFile1">lincece photo input</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $crew_info["image"] ?>">
            <span class="text-danger"><?php if(isset($image_error)) echo $image_error;?>  </span>
         </div>

         
         <!--<input type="submit" name="submit" value="Upload">-->
         <button type="submit" name="submit" class="btn btn-success ">update</button>
        <button type="submit" class="btn ">cancel</button>

        

   
</form>
    




        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="jquery/jquery-3.6.0.min.js"></script>
      
        <script src="java_script/sea_services.js"></script>
</body>
<?php include "master_layouts/footer.php" ?>