<?php
include_once "db.php";
class Crew{

private $pdo;

public function insertCrew($firstname,$middlename,$lastname,$father_name,$mother_name,$nationality,$birthdate,$rank,$vessel_type,$final_school,$martial_status,$waistline,$uniform_size,$blood_type,$safeshoe,$health_status,$bank_info,$tele1,$tele2,$address,$city,$english_level,$application_date,$passportno,$passportdate,$passportexpiredate,$sbookno,$sbookdate,$sbookexpire,$lincece,$lincecedate,$linceceexpire,$image)
{
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="insert into crew(firstname,middlename,lastname,father_name,mother_name,nationality,birthdate,rank,vessel_type,final_school,martial_status,waistline,uniform_size,blood_type,safeshoe,health_status,bank_info,tele1,tele2,address,city,english_level,application_date,passportno,passportdate,passportexpiredate,sbookno,sbookdate,sbookexpire,lincece,lincecedate,linceceexpire,image) values (:fname,:mname,:lname,:father_name,:mother_name,:nationality,:birthdate,:rank,:vessel_type,:final_school,:martial_status,:waistline,:uniform_size,:blood_type,:safeshoe,:health_status,:bank_info,:tele1,:tele2,:address,:city,:english_level,:application_date,:passportno,:passportdate,:passportexpiredate,:sbookno,:sbookdate,:sbookexpire,:lincece,:lincecedate,:linceceexpire,:image)";


//prepare statement
$statement=$this->pdo->prepare($sql);

//
$statement->bindParam("fname",$firstname);
$statement->bindParam("mname",$middlename);
$statement->bindParam("lname",$lastname);
$statement->bindParam("father_name",$father_name);
$statement->bindParam("mother_name",$mother_name);
$statement->bindParam("nationality",$nationality);
$statement->bindParam("birthdate",$birthdate);
$statement->bindParam("rank",$rank);
$statement->bindParam("vessel_type",$vessel_type);
$statement->bindParam("final_school",$final_school);
$statement->bindParam("martial_status",$martial_status);
$statement->bindParam("waistline",$waistline);
$statement->bindParam("uniform_size",$uniform_size);
$statement->bindParam("blood_type",$blood_type);
$statement->bindParam("safeshoe",$safeshoe);
$statement->bindParam("health_status",$health_status);
$statement->bindParam("bank_info",$bank_info);
$statement->bindParam("tele1",$tele1);
$statement->bindParam("tele2",$tele2);
$statement->bindParam("address",$address);
$statement->bindParam("city",$city);
$statement->bindParam("english_level",$english_level);
$statement->bindParam("application_date",$application_date);
$statement->bindParam("passportno",$passportno);
$statement->bindParam("passportdate",$passportdate);
$statement->bindParam("passportexpiredate",$passportexpiredate);
$statement->bindParam("sbookno",$sbookno);
$statement->bindParam("sbookdate",$sbookdate);
$statement->bindParam("sbookexpire",$sbookexpire);
$statement->bindParam("lincece",$lincece);
$statement->bindParam("lincecedate",$lincecedate);
$statement->bindParam("linceceexpire",$linceceexpire);

$statement->bindParam("image",$image);



//excute
if($statement->execute())
{
    return true;
}
else {
    return false;
}
}
public function getCrews(){
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //  $sql="select * from crew";
  $sql="select * from crew as c join vessel as v where c.vessel_type=v.id";
    $statement=$this->pdo->prepare($sql);
    $statement->execute();
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
public function getCrewInfo($cid){
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="select * from crew where crewid=:cid";
    $statement=$this->pdo->prepare($sql);
    $statement->bindParam("cid",$cid);
    $statement->execute();

    $result=$statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}
public function updateCrew($cid,$firstname,$lastname,$image)
{
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //sql
    $sql="update crew set firstname=:fname, lastname=:lname, image=:img where id=:cid";
    $statement=$this->pdo->prepare($sql);
    $statement->bindParam("fname",$firstname);
    $statement->bindParam("lname",$lastname);
    $statement->bindParam("img",$image);
    $statement->bindParam("cid",$cid);
   if($statement->execute())
    {
        return true;
    }
    else {
        return false;
    }
}

public function deleteCrewInfo($cid)
{
   
    //delete customer
    $pdo=Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //2.sql statement
    $sql="delete from crew where crewid=:cid";
    //3. preprare sql statement
    $statement=$pdo->prepare($sql);
    $statement->bindParam(":cid",$cid) ;
    $result=$statement->execute();
    if($result)
    {
        return true;
    }
    else{
        return false;
    }
}




//vessel----------------------------------------------------------------------------------------------------
public function insertVessel($name)
{
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="insert into vessel_table(name) values (:name)";


//prepare statement
$statement=$this->pdo->prepare($sql);

//
$statement->bindParam("name",$name);




//excute
if($statement->execute())
{
    return true;
}
else {
    return false;
}
}
public function getVessels(){
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="select * from vessel_table";
    $statement=$this->pdo->prepare($sql);
    $statement->execute();
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
public function getVesselInfo($cid){
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="select * from vessel_table where id=:cid";
    $statement=$this->pdo->prepare($sql);
    $statement->bindParam("cid",$cid);
    $statement->execute();

    $result=$statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}
public function updateVessel($cid,$name)
{
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //sql
    $sql="update vessel_table set name=:name where id=:cid";
    $statement=$this->pdo->prepare($sql);
    $statement->bindParam("name",$name);
    
   if($statement->execute())
    {
        return true;
    }
    else {
        return false;
    }
}
}
?>





