<?php

namespace App\Modules\CropProblem\Controllers;
use App\Modules\ServiceData\Controllers\ServiceData as Service;
use App\Models\crop_problem AS tb_method_6;
use App\Models\disease_pest_weed;
use App\Models\disease_symptom;
use App\Models\symptom;
use System\HMVC\HMVC;
use System\Security\ACL;

class CropProblem extends HMVC {

    protected $db;
    protected $rowId;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
 
        $this->db = new tb_method_6();
        $this->db->where = "crop_id='" . $this->param(0) . "'";
        $this->db->orderSort = "crop_problem_id ASC";
        
        
        
        $disease_pest_weed = new disease_pest_weed();
        $disease_pest_weed->display = "disease_pest_weed_name";
         
        
        
        
        $disease_symptom = new disease_symptom();
        $disease_symptom->display = "detail";
        $disease_symptom->fk = "symptom_id";
        
        $symptom = new symptom();
         $symptom->display = "symptom_name";   
         
         //set param
          
         $fk1 = "disease_pest_weed_id";
         $tb1 = array($disease_pest_weed);
         
         
         $fk2 = "disease_symptom_id";
         $tb2 = array($disease_symptom,$symptom);
         
         //
         
         
        $this->db->multiFKJoin(array($fk1,$fk2), array($tb1,$tb2));
        $this->view();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new tb_method_6();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->rowId = $this->db->get($this->param(1));
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

}
