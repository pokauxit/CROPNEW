<?php

namespace App\Modules\Ageiculturist\Controllers;

use System\HMVC\HMVC;
use App\Models\ageiculturist as agl;
use App\Models\tambon;
use App\Models\amphur;
use App\Models\province;
use System\Security\ACL;
use System\Utils\Paging;

class Ageiculturist extends HMVC {

    protected $db;
    protected $row;
    protected $allRow;
    protected $pageLimit = 2;
    protected $paging;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new agl();
        $this->paging = new Paging();
        
        $this->paging->total = $this->db->count($this->db->pk());
        $this->paging->currentPage = $this->param(1);
        $this->paging->perPage = $this->pageLimit;
        $this->paging->url = $this->route->backToModule()."///";
        
        $this->db->limit = $this->paging->limit();
        $this->db->order = $this->db->pk();
        $this->db->orderSort = "DESC";
        
        //$this->allRow = $this->db->count($this->db->pk());
        //$this->db->limit = Paging::limit($this->pageLimit, $this->param(1));
       // $this->db->left("tambon_id", "tambon.tambon_name");
        
        $tumbon = new tambon();
        $tumbon->display = "tambon_name"; 
        $tumbon->fk = "amphur_id";       
        
        $amphur = new amphur();
        $amphur->fk = "province_id";
        $amphur->display = "amphur_name";
        $amphur->moreDisplay = "postcode";
        
        $province = new province();  
        $province->display = "province_name";
        
        $this->db->multiLeftJoin("tambon_id", array($tumbon,$amphur,$province));

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