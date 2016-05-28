<?php

namespace App\Modules\Soil\Controllers;

use App\Models\soil AS tb_soil;
use System\HMVC\HMVC;

class Soil extends HMVC {

    protected $db;
    protected $rowId;

    public function __construct() {
        //ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_soil();
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
        $this->db = new tb_soil();
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