<?php
if(isset($_POST["submit"])){
    if(empty($_POST["name"]))
    {
        $name_error="please enter name";
    }
    else{
        $name=$_POST["name"];
    }

    $file=$_FILES["files"];
    print_r($file);
    $filename=$file["name"];
    print_r($filename);
    $fileExt=explode(".",$filename); //divide string into arrays
    $file_actual_extension=strtolower(end($fileExt));
    $allowed=array("jpeg","jpg","png","pdf");
    if(in_array($file_actual_extension,$allowed)){
        if($file["error"]==0){
            if($file["size"]<50000000)
            {
                $filenewname=uniqid("reg",true).".".$file_actual_extension;
                print_r($filenewname);
                $filedestination="uploads_reg/".$filenewname;
                move_uploaded_file($file ['tmp_name'],$filedestination);
                header("location:personal_details.php?filename=$filenewname");
            }
            else{

            }
        }
    }
    

  
}
?>
<?php include "master_layouts/header.php" ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 
                   

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col">
                            <form class="form-group" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3" >
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="name" name="name" class="form-control" id="exampleFormControlInput1 ">
                          
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Email </label>
                            <input type="email" name="name" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">phone</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlInput1">address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" name="files"  class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                       

                       
                       
                    </div>

                   
            <!-- End of Main Content -->
<?php include "master_layouts/footer.php" ?>