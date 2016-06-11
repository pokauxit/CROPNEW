<?php

namespace App\Modules\Soil\Controllers;

use App\Models\soil AS tb_soil;
use System\HMVC\HMVC;
use System\Security\ACL;
use System\Utils\Paging;

class Soil extends HMVC {

    protected $db;
    protected $dbSoil;
    protected $rowId;
    protected $allRow;
    protected $pageLimit = 2;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_soil();
        $this->allRow = $this->db->count($this->db->pk());
        $this->db->limit = Paging::limit($this->pageLimit, $this->param(1));
        $this->db->order = $this->db->pk();
        $this->db->orderSort = "DESC";
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

    public function getSoilAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->dbSoil = new tb_soil();
        $this->dbSoil->select();
        $this->view("Option_List");
    }

}

?>