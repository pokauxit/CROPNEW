<?php
namespace App\Modules\Home\Controllers;
use System\HMVC\HMVC;



class Home extends HMVC{
 
    public  function index(){
        
       $this->view();
    }
    
    
     public  function Add(){  
          $this->controller();  
     }
     
     
}

?>
