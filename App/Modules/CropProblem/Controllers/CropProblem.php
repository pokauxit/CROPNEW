<?php

namespace App\Modules\CropProblem\Controllers;
use App\Modules\ServiceData\Controllers\ServiceData as Service;
use App\Models\crop_problem AS tb_method_6;
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
        $this->db->left('disease_pest_weed_id', 'disease_pest_weed.disease_pest_weed_name');
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
