<?php

namespace App\Modules\Staff\Controllers;

use App\Models\staff AS tb_staff;
use System\HMVC\HMVC;

class Staff extends HMVC {

    protected $db;
    protected $rowId;

    public function __construct() {
        //ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_staff();
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
        $this->db = new tb_staff();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->rowId = $this->db->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

}

?>