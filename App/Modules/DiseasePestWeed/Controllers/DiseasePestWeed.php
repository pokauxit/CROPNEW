<?php

/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 14:03
 */

namespace App\Modules\DiseasePestWeed\Controllers;

use \App\Models\symptom as spm;
use \App\Models\plant as plt;
use \App\Models\disease_pest_weed as dpw;
use System\HMVC\HMVC;
use System\Security\ACL;
use System\Utils\Paging;

class DiseasePestWeed extends HMVC {

    protected $plants;
    protected $symptoms;
    protected $row;
    protected $rowId;
    protected $db;
    protected $dbList;
    protected $allRow;
    protected $pageLimit = 2;
    protected $paging;

    public function index() {
        $this->db = new dpw();
        $this->paging = new Paging();

        $this->paging->total = $this->db->count($this->db->pk());
        $this->paging->currentPage = $this->param(1);
        $this->paging->perPage = $this->pageLimit;
        $this->paging->url = $this->route->backToModule() . "///";

        $this->db->limit = $this->paging->limit();
        $this->db->order = $this->db->pk();
        $this->db->orderSort = "DESC";

        $this->db->select();
        $this->view();
    }

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->plants = new plt();
            $this->plants->select();

            $this->symptoms = new spm();
            $this->symptoms->select();

            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new dpw();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->plants = new plt();
            $this->plants->select();

            $this->symptoms = new spm();
            $this->symptoms->select();

            $this->row = $this->db->get(ID);

            //$this->rowId = $this->db->get($this->param(1));
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function getListByType($id) {
        $this->id = ID;
        $this->dbList = new plt();
        $this->dbList->where = "type_id='" . $this->id . "'";
        $this->dbList->select();
        $this->view("getList");
    }

    public function getTypeIdByPlantId($plant_id) {

        $tb = new plt();
        return $tb->get($plant_id);
    }

    public function getWeed() {
        $this->id1 = $_POST['id1'];
        $this->id2 = $_POST['id2'];
        $this->dbList = new dpw();
        $this->dbList->where = "problem_type_id='" . $this->id1 . "' AND plant_id='" . $this->id2 . "'";
        $this->dbList->select();
        $this->view("getWeed");
    }

}
