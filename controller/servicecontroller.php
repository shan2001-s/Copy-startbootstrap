<?php
include_once "model/service.php";
class ServiceController extends Service{
    public function insertService($crew_id,$company,$ship,$rank,$vtype)

    {
        $this->addService($crew_id,$company,$ship,$rank,$vtype);
    }

    public function showServices(){
        return $this->getServices();
    }
    public function showServiceInfo($cid)
    {
        return $this->getServiceInfo($cid);
    }
}
?>