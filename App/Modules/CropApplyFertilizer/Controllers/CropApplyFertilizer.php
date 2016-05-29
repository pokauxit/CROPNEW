<?php

namespace App\Modules\CropApplyFertilizer\Controllers;

use App\Models\apply_fertilizer AS tb_method_5;
use App\Models\biofertilizer AS tb_method_5_1;
use System\HMVC\HMVC;

class CropApplyFertilizer extends HMVC {

    protected $db;
    protected $dbList;
    protected $rowId;
    protected $rowId2;

    public function __construct() {

        parent::__construct();
    }

    public function index() {
        if (!empty($_POST['List'])) {
            $this->getListByType($_POST['List']);
        } else {
            $this->db = new tb_method_5();
            $this->db->where = "crop_id='" . $this->param(0) . "'";
            $this->db->orderSort = "apply_fertilizer_id ASC";
            $this->db->left('bio_fer_id', 'biofertilizer.bio_fer_name');
            $this->view();
        }
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new tb_method_5();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->rowId = $this->db->get($this->param(1));

            $type = $this->rowId->bio_fer_id;
            $this->dbList = new tb_method_5_1();
            $this->rowId2 = $this->dbList->get($type);

            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function getListByType($id) {
        $this->id = $id;
        $this->dbList = new tb_method_5_1();
        $this->dbList->where = "type_fertilizer_id='" . $this->id . "'";
        $this->dbList->select();
        $this->view("getList");
    }

}
