<?php
interface banking{
    public function withdraw($acc,$amount);
    public function deposit($acc,$amount);
}
class bank acc implements banking{
    public $ac_no;
    public $balance=0;
    
    public function __construct($acc, $bal){
        $this->ac_no=$acc;
        $this->balance=$bal;
        echo "Account Created";
    }

    public function withdraw ($acc, $amount){
        if($this->ac_no == $acc){
            $this->balance -=
        }
    }
}

?>