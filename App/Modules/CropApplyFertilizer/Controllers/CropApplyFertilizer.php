<?php

namespace App\Modules\CropApplyFertilizer\Controllers;

use App\Models\apply_fertilizer AS tb_method_5;
use App\Models\biofertilizer AS tb_method_5_1;
use App\Models\fertilizer_unit;
use System\HMVC\HMVC;
use System\Security\ACL;

class CropApplyFertilizer extends HMVC {

    protected $db;
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
            $this->db = new tb_method_5();
            $this->db->where = "crop_id='" . $this->param(0) . "'";
            $this->db->orderSort = "apply_fertilizer_id ASC";

            $funit = new fertilizer_unit();
            $funit->display = "unit_name";

            $fk1 = "apply_fertiltzer_unit";
            $branch1 = array($funit);

            $bio = new tb_method_5_1();
            $bio->display = "bio_fer_name";

            $fk2 = "bio_fer_id";
            $branch2 = array($bio);

            $fkList = array($fk1, $fk2);
            $arrayFomat = array($branch1, $branch2);
            $this->db->multiFKJoin($fkList, $arrayFomat);
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
