<?php

namespace App\Modules\CropApplication\Controllers;

use App\Models\application_method AS tb_method_1;
use System\HMVC\HMVC;
use System\Security\ACL;

class CropApplication extends HMVC {

    protected $db;
    protected $rowId;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_method_1();
        $this->db->where = "crop_id='" . $this->param(0) . "'";
        $this->db->orderSort = "step ASC";
        $this->db->select();
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
        $this->db = new tb_method_1();
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
