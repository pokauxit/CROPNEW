<?php
namespace App\Modules\BioFertilizer\Controllers;

use System\HMVC\HMVC;
use App\Models\biofertilizer as bfz;
use App\Models\typefertilizer as typeftz;
use System\Security\ACL;

class BioFertilizer extends HMVC {

    protected $db;
    protected $dbTypeFtz;
    protected $row;

    public function __construct() {
        //ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new bfz();
        $this->db->left("type_fertilizer_id", "typefertilizer.type_fertilizer_name");

        $this->view();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbTypeFtz = new typeftz();
            $this->dbTypeFtz->select();

            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new bfz();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->dbTypeFtz = new typeftz();
            $this->dbTypeFtz->select();

            $this->row = $this->db->get(ID);
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function getPlantAll($id) {// รับ ID มา Selected
        $this->id = $id;
        $this->db = new bfz();
        $this->db->select();
        $this->view("Option_List");
    }
}
?>

