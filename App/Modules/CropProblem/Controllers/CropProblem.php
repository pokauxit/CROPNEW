<?php

namespace App\Modules\CropProblem\Controllers;

use App\Modules\ServiceData\Controllers\ServiceData as Service;
use App\Models\crop_problem AS tb_method_6;
use App\Models\disease_pest_weed;
use App\Models\disease_symptom;
use App\Models\symptom;
use App\Models\symptom_problem;
use System\HMVC\HMVC;
use System\Security\ACL;

class CropProblem extends HMVC {

    protected $db;
    protected $rowId;
    protected $json;
    protected $symptom_problem;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {

        $this->db = new tb_method_6();
        $this->db->where = "crop_id='" . $this->param(0) . "'";
        $this->db->orderSort = "crop_problem_id ASC";



        $disease_pest_weed = new disease_pest_weed();
        $disease_pest_weed->display = "disease_pest_weed_name";




        $disease_symptom = new disease_symptom();
        $disease_symptom->display = "detail";
        $disease_symptom->fk = "symptom_id";

        $symptom = new symptom();
        $symptom->display = "symptom_name";

        //set param

        $fk1 = "disease_pest_weed_id";
        $tb1 = array($disease_pest_weed);


        $fk2 = "disease_symptom_id";
        $tb2 = array($disease_symptom, $symptom);

        //


        $this->db->multiFKJoin(array($fk1), array($tb1));
        $this->view();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $symptom = new symptom();
            $symptom->select();
            while ($rc = $symptom->fetch()) {
                $ar[] = array("id" => $rc->symptom_id, "name" => $rc->symptom_name);
            }
            $this->json = json_encode($ar);

            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new tb_method_6();
        if (SUBMIT) {
            $this->controller();
        } else {
            $symptom = new symptom();
            $symptom->select();
            while ($rc = $symptom->fetch()) {
                $ar[] = array("id" => $rc->symptom_id, "name" => $rc->symptom_name);
            }
            $this->json = json_encode($ar);

            $this->symptom_problem = new symptom_problem();
            $this->symptom_problem->where = "crop_problem_id='" . $this->param(1) . "'";
            $this->symptom_problem->left('symptom_id', 'symptom.symptom_name');

            $this->rowId = $this->db->get($this->param(1));
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

}
