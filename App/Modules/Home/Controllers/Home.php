<?php
namespace App\Modules\Home\Controllers;
use System\HMVC\HMVC;
use App\Models\ageiculturist;
use System\ORM\JoinModel as Model;

class Home extends HMVC{
    var $db;
    public  function index(){
        $this->db  = new ageiculturist();
        $tambon = new Model("tambon");
        $tambon->display = "tambon_name"; 
        $tambon->fk = "amphur_id";
        
        
        $amphur  =  new Model("amphur");
        $amphur->display = "amphur_name";
        $amphur->moreDisplay ="postcode";
        $amphur->fk = "province_id";
        
        
        $province  =  new Model("province");
        $province->display = "province_name";
        $province->fk = "";
        
       $this->db->multiLeftJoin("tambon_id", array($tambon,$amphur,$province));
     
         
        $this->view();
    }
    
    
     public  function Add(){  
          $this->controller();  
     }
     
     
}

?>
