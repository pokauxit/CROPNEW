<?php

namespace App\Modules\Plant\Controllers;

use System\HMVC\HMVC;
use App\Models\plant as pln;
use App\Models\typeplant as typepln;
use System\Security\ACL;
use System\Utils\Paging;

class Plant extends HMVC {

    protected $dbPlant;
    protected $dbTypePlan;
    protected $row;
    protected $allRow;
    protected $pageLimit =2;
    protected $paging;
    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index(){ 
        $this->dbPlant = new pln();
  
             $this->paging = new Paging();
             $this->paging->total =  $this->dbPlant->count($this->dbPlant->pk());
             $this->paging->currentPage = $this->param(1);
             $this->paging->perPage = $this->pageLimit;
             $this->paging->url =  $this->route->backToModule()."///";
             
        $this->dbPlant->limit =  $this->paging->limit();
        $this->dbPlant->order = $this->dbPlant->pk();
        $this->dbPlant->orderSort = "DESC";
        $this->dbPlant->left("type_id", "typeplant.type_name");
        $this->view();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbTypePlan = new typepln();
            $this->dbTypePlan->select();

            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new pln();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbTypePlan = new typepln();
            $this->dbTypePlan->select();

            $this->row = $this->db->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function getPlantAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->dbPlant = new pln();
        $this->dbPlant->select();
        $this->view("Option_List");
    }

}
?>

