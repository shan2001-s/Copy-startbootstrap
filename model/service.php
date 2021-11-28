<?php
include_once "db.php";
class Service{


private $pdo; /// for database

public function addService($crew_id,$company,$ship,$rank,$vtype)
{
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//write sql statement
$sql="insert into service(crew_id,company_name,ship_name,rank,vessel_type) values (:crew_id,:company_name,:ship_name,:rank,:vessel_type)";
// prepare statement
$statement=$this->pdo->prepare($sql);
//
$statement->bindParam("crew_id",$crew_id);
$statement->bindParam("company_name",$company);
$statement->bindParam("ship_name",$ship);
$statement->bindParam("rank",$rank);
$statement->bindParam("vessel_type",$vtype);

//excute
if($statement->execute())
{
    return true;
}
else{
    return false;
}
}

public function getServices(){
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
  $sql="select * from service as s join crew as c where s.crew_id=c.crewid";
    $statement=$this->pdo->prepare($sql);
    $statement->execute();
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
public function getServiceInfo($cid){
    $this->pdo=Database::connect();
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="select * from service where id=:cid";
    $statement=$this->pdo->prepare($sql);
    $statement->bindParam("cid",$cid);
    $statement->execute();

    $result=$statement->fetch(PDO::FETCH_ASSOC);
    return $result;
}
}