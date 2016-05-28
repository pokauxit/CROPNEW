<?php

namespace App\Modules\Crop\Controllers;

use App\Models\crop AS tb_crop;
use App\Models\plant AS tb_plant;
use System\HMVC\HMVC;

class Crop extends HMVC {

    protected $db;
    protected $dbPlan;
    protected $rowId;

    public function __construct() {
        //ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_crop();
        $this->db->where = "argiculturist_id='" . $this->param(0) . "'";
        $this->db->orderSort = "crop_id ASC";
        $this->db->left('plant_id', 'plant.plant_name');
        $this->view();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbPlan = new tb_plant();
            $this->dbPlan->select();
            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new tb_crop();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbPlan = new tb_plant();
            $this->dbPlan->select();
            $this->rowId = $this->db->get($this->param(1));
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

}

?>