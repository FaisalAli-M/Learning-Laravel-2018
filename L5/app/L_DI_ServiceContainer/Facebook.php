<?php 

namespace App\L_DI_ServiceContainer;

class Facebook {
    public $c_id;
    private $c_secrete;
    private $c_url;
    
    public function setFacebookCred($facebook){
        $this->c_id = $facebook['client_id'];
        $this->c_secrete = $facebook['client_key'];
        $this->c_url = $facebook['Client_url'];
    }
    
    public function getClientId(){
        return $this->c_id;
    }
}

?>