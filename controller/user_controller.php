<?php
include_once "model/user.php";
class UserController extends User{

    public function checkUser($username,$password)
    {
        $this->getUser($username,$password);

    }
}
?>