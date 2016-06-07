<?php

namespace App\Modules\Crop\Controllers;

use App\Models\crop AS tb_crop;
use App\Models\plant AS tb_plant;
use App\Models\agr_standard AS tb_standard;
use App\Models\cultivated_area AS tb_area;
use System\HMVC\HMVC;
use System\Security\ACL;

class Crop extends HMVC {

    protected $db;
    protected $dbPlan;
    protected $dbStandard;
    protected $dbArea;
    protected $dbList;
    protected $rowId;
    protected $rowId2;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        if (!empty($_POST['List'])) {
            $this->getListByType($_POST['List']);
        } else {
            $this->db = new tb_crop();
            $this->db->where = "argiculturist_id='" . $this->param(0) . "'";
            $this->db->orderSort = "crop_id ASC";
            $this->db->left('plant_id', 'plant.plant_name');
            $this->view();
        }
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbPlan = new tb_plant();
            $this->dbPlan->select();

            $this->dbArea = new tb_area();
            $this->dbArea->where = "agriculturist_id='" . $this->param(0) . "'";
            $this->dbArea->left('soil_id', 'soil.soil_name');
            
            $this->dbStandard = new tb_standard();
            $this->dbStandard->where = "agriculturist_id='" . $this->param(0) . "'";
            $this->dbStandard->left('sid', 'standard.type_fertilizer_name');

            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new tb_crop();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->rowId = $this->db->get($this->param(1));
            
            $this->dbArea = new tb_area();
            $this->dbArea->where = "agriculturist_id='" . $this->param(0) . "'";
            $this->dbArea->left('soil_id', 'soil.soil_name');
            
            $this->dbStandard = new tb_standard();
            $this->dbStandard->where = "agriculturist_id='" . $this->param(0) . "'";
            $this->dbStandard->left('sid', 'standard.type_fertilizer_name');
            
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function getListByType($id) {
        $this->id = $id;
        $this->dbList = new tb_plant();
        $this->dbList->where = "type_id='" . $this->id . "'";
        $this->dbList->select();
        $this->view("getList");
    }

    public function getTypeIdByPlantId($plant_id) {

        $tb = new tb_plant();
        return $tb->get($plant_id);
    }

}

?>