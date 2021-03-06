<?php

namespace App\Modules\AgrCultivatedArea\Controllers;

use App\Models\cultivated_area AS tb_method_4;
use System\HMVC\HMVC;
use System\Security\ACL;

class AgrCultivatedArea extends HMVC {

    protected $db;
    protected $rowId;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_method_4();
        $this->db->where = "agriculturist_id='" . $this->param(0) . "'";
        $this->db->orderSort = "area_sequence ASC";
        $this->db->left('soil_id', 'soil.soil_name');
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
        $this->db = new tb_method_4();
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
