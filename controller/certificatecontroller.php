<?php
include_once "model/service.php";
class ServiceController extends Service{
    public function insertCertificate($crew_id,$certificate_name,$issue,$number,$expired)

    {
        $this->addService($crew_id,$certificate_name,$issue,$number,$expired);
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