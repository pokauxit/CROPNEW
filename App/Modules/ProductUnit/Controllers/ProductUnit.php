<?php

namespace App\Modules\ProductUnit\Controllers;

use System\HMVC\HMVC;
use App\Models\product_unit;
use System\Security\ACL;
use System\Utils\Paging;

class ProductUnit extends HMVC {

    protected $db;
    protected $row;
    protected $allRow;
    protected $pageLimit = 2;
    protected $row_start;
    protected $page;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();

        $this->page = $this->param(1);
        if ($this->page < 1) {
            $this->page = 1;
        }
        $this->row_start = ($this->page - 1) * $this->pageLimit;
    }

    public function index() {
        $this->db = new product_unit();
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
        $this->db = new product_unit();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->row = $this->db->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function getUnitAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->db = new product_unit();
        $this->db->select();
        $this->view("Option_List");
    }

    public function AddByAJAX() {
        $this->controller();
    }

}
?>

