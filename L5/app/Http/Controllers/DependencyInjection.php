<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DependencyIModel;

// new
use App\L_DI_ServiceContainer\Facebook; // hum isko alaise mai b use krskty hen phr us naam sy access krengy yaha

class DependencyInjection extends Controller
{
   private $test;
    
    public function D_dashboard(DependencyIModel $D_test , $name)
    { // Hum kis method ya fuction mai Dependency Injection ko use krskty hai or Url sy Parameter b receive kr skty hai
        echo "<h1>{$name}</h1>";
    }
    public function __construct(DependencyIModel $D_test) // here we enter class name or Interface name if implements class
    {
       // echo "Constructor Method from Dependency Injection Controller"; // echo only for check this construtor run or no if run so mean larvel create this class object in background bt itsself
        
        $this->test = $D_test;
        
        
    }
    
    // Upper wala work old video ka hai nichy wala Advance Perfect web Solution ka
    
    public function index(Facebook $fb){
        $fb->setFacebookCred(config('services.facebook')); // yeh line likhny k bd ab chahen to service provider k register method sy code rempve krskty hen ya yeh line remove krskty hen hum py depend krta hai 
        dd($fb->getClientId());
    }
}
