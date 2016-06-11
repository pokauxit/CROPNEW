<?php

namespace App\Modules\Ageiculturist\Controllers;

use System\HMVC\HMVC;
use App\Models\ageiculturist as agl;
use System\Security\ACL;
use System\Utils\Paging;

class Ageiculturist extends HMVC {

    protected $db;
    protected $row;
    protected $allRow;
    protected $pageLimit = 2;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new agl();
        $this->allRow = $this->db->count($this->db->pk());
        $this->db->limit = Paging::limit($this->pageLimit, $this->param(1));
        $this->db->left("tambon_id", "tambon.tambon_name");

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
        $this->db = new agl();
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

}

?>