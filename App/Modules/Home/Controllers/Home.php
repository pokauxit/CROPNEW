<?php
namespace App\Modules\Home\Controllers;
use System\HMVC\HMVC;
use App\Models\ageiculturist;
use System\ORM\JoinModel as Model;
use System\Utils\JS;


class Home extends HMVC{
    var $db;
    public  function index(){
        
        if(!$this->session("STAFF")){
           echo JS::re("?Login");
        }else{ 
            echo JS::re("?CropMain");
        }
//        $this->db  = new ageiculturist();
//        $tambon = new Model("tambon");
//        $tambon->display = "tambon_name"; 
//        $tambon->fk = "amphur_id";
//        
//        
//        $amphur  =  new Model("amphur");
//        $amphur->display = "amphur_name";
//        $amphur->moreDisplay ="postcode";
//        $amphur->fk = "province_id";
//        
//        
//        $province  =  new Model("province");
//        $province->display = "province_name";
//        
//        
//       $this->db->multiLeftJoin("tambon_id", array($tambon,$amphur,$province));
//        $this->view();
    }
    
    
     public  function Add(){  
          $this->controller();  
     }
     
     
}

?>
