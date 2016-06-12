<?php

namespace App\Modules\AgrStandard\Controllers;
use App\Modules\ServiceData\Controllers\ServiceData as Service;
use App\Models\agr_standard AS tb_method_6;
use System\HMVC\HMVC;
use System\Security\ACL;

class AgrStandard extends HMVC {

    protected $db;
    protected $rowId;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
 
        $this->db = new tb_method_6();
        $this->db->where = "agriculturist_id='" . $this->param(0) . "'";
        $this->db->orderSort = "crop_standard_id ASC";
<<<<<<< HEAD
        $this->db->left('sid', 'standard.standrad_name');
=======
        $this->db->left('sid', 'standard.standard_name');
>>>>>>> 93228e37fda028a1ea4d86c152b5154e8ab5f12e
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
