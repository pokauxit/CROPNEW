<?php
 namespace App\Modules\TypePlant\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typeplant as tpl;
 use System\Security\ACL;
 use System\Utils\Paging;
 
 
 class TypePlant extends HMVC{
     protected  $db;
     protected  $row;
     protected  $pageLimit = 2;
     protected  $paging;
     
     public function __construct() {
         ACL::check("STAFF");
         parent::__construct();
     }

     public function index() {
        $this->db = new tpl();
        $this->paging = new Paging();
        
        $this->paging->total =  $this->db->count($this->db->pk());
        $this->paging->currentPage = $this->param(1);
        $this->paging->perPage = $this->pageLimit;
        $this->paging->url =  $this->route->backToModule()."///";
        
        $this->db->limit = $this->paging->limit();
        $this->db->order = $this->db->pk();
        $this->db->orderSort = "DESC";
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