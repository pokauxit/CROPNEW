<?php

namespace App\Modules\CropProduct\Controllers;

use App\Models\product AS tb_method_2;
use System\HMVC\HMVC;
use System\Security\ACL;


class CropProduct extends HMVC {

    protected $db;
    protected $dbList;
    protected $rowId;
    protected $rowId2;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_method_2();
        $this->db->where = "crop_id='" . $this->param(0) . "'";
        $this->db->orderSort = "product_id ASC";
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
        $this->db = new tb_method_2();
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
