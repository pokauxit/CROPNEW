<?php

namespace App\Modules\Crop\Controllers;

use App\Models\crop AS tb_crop;
use System\HMVC\HMVC;

class Crop extends HMVC {

    protected $db;
    protected $rowId;

    public function __construct() {
        //ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_crop();
        $this->db->where = "argiculturist_id='" . $this->param(0) . "'";
        $this->db->orderSort = "crop_id ASC";
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
        $this->db = new tb_crop();
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

?>