<?php
 namespace App\Modules\TypeFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typefertilizer as tfz;
 use System\Security\ACL;
 
 
 class TypeFertilizer extends HMVC{
     protected  $db;
     protected  $row;
     
     public function __construct() {
         ACL::check("STAFF");
         parent::__construct();
     }

     public function index() {
        $this->db = new tfz();
        $this->db->select();
        $this->view();
     }
     
    public function  Add(){
        if(SUBMIT){
            $this->controller();
        }else{
            $this->view("Add");
        }
        
    }
    
    public function  Edit(){
         $this->db = new tfz();
        if(SUBMIT){
            $this->controller();
        }else{
            $this->row = $this->db->get(ID);
            $this->view("Edit");
        }
        
    }
    
    public function Delete(){
        $this->controller();
    }
    
   public function getTypeFertilizerAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->db = new tfz();
        $this->db->select();
        $this->view("Option_List");
    }

}
?>