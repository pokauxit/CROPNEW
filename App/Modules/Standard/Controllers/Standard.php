<?php
 

namespace App\Modules\Standard\Controllers;


use System\HMVC\HMVC;
use \App\Models\standard as std;
use System\Security\ACL;
use System\Utils\Paging;

class Standard extends HMVC
{

    protected $db;
    protected $row;
    protected $allRow;
    protected $pageLimit = 2;


    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index()
    {
        $this->db = new std();
        $this->allRow = $this->db->count($this->db->pk());
        $this->db->limit = Paging::limit($this->pageLimit, $this->param(1));
        $this->db->order = $this->db->pk();
        $this->db->orderSort = "DESC";
        $this->db->select();
        $this->view();
    }

    public function Add()
    {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->view("Add");
        }
    }

    public function Edit()
    {
        $this->db = new std();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->row = $this->db->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete()
    {
        $this->controller();
    }
    
    public function getStandardAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->db = new std();
        $this->db->select();
        $this->view("Option_List");
    }
}