<?php
 namespace App\Modules\TypePlant\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typeplant as tpl;
 use System\Security\ACL;
 
 
 class TypePlant extends HMVC{
     protected  $db;
     protected  $row;
     
     public function __construct() {
         //ACL::check("STAFF");
         parent::__construct();
     }

     public function index() {
        $this->db = new tpl();
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
         $this->db = new tpl();
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
   
    public function getTypePlantAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->db = new tpl();
        $this->db->select();
        $this->view("Option_List");
    }

}
 
 
?>