<?php
namespace App\Modules\ServiceData\Controllers;
use System\HMVC\HMVC;
use App\Models\crop;
use App\Models\plant as pln;
use App\Models\ageiculturist as agl;

class ServiceData extends HMVC{
    
    protected $dbPlant; 
        protected $db; 
    public function index() {
        
    }
    
    public function getCropByID($id){
        
           $tb = new crop();
          return $tb->get($id);
         
    }
    public function showAgeiculturist($id){
         echo $id;
         $this->db = new agl();
          $this->db->where =$this->db->pk()."=".$id;
        $this->db->left("tambon_id", "tambon.tambon_name");
          $this->view("Ageiculturist");
    }
    
    public function showPlant($id){
       
       $this->dbPlant = new pln();
       $this->dbPlant->where =$this->dbPlant->pk()."=".$id;
        $this->dbPlant->left("type_id", "typeplant.type_name"); 
        $this->view("Plant");
    }
}
