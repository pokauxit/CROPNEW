<?php

namespace App\Modules\ProblemControl\Controllers;

use App\Models\crop_problem as cpm;
use App\Models\control AS tb_method_5;
use App\Models\biofertilizer AS tb_method_5_1;
use App\Models\fertilizer_unit;
use System\HMVC\HMVC;
use System\Security\ACL;
use App\Models\disease_pest_weed;
use App\Models\disease_symptom;
use App\Models\symptom;
use App\Models\symptom_problem;

class ProblemControl extends HMVC {

    protected $problems;
    protected $db;
    protected $dbList;
    protected $rowId;
    protected $rowId2;
    protected $symptom_problem;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->db = new tb_method_5();
        $this->db->where = "crop_problem_id='" . $this->param(1) . "'";
        $this->db->orderSort = "control_id ASC";


        $funit = new fertilizer_unit();
        $funit->display = "unit_name";

        $fk1 = "unit";
        $branch1 = array($funit);

        $bio = new tb_method_5_1();
        $bio->display = "bio_fer_name";

        $fk2 = "bio_fer_id";
        $branch2 = array($bio);

        $fkList = array($fk1, $fk2);
        $arrayFomat = array($branch1, $branch2);
        $this->db->multiFKJoin($fkList, $arrayFomat);



        $this->problems = new cpm();
        $this->problems->where = "crop_problem_id='" . $this->param(1) . "'";



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


        //$fk2 = "disease_symptom_id";
        //  $tb2 = array($disease_symptom,$symptom);
        //
         
         
         $this->problems->multiFKJoin(array($fk1), array($tb1));

        $this->symptom_problem = new symptom_problem();
        $this->symptom_problem->where = "crop_problem_id='" . $this->param(1) . "'";
        $this->symptom_problem->left('symptom_id', 'symptom.symptom_name');

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
        $this->db = new tb_method_5();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->rowId = $this->db->get($this->param(2));

            $type = $this->rowId->bio_fer_id;
            $this->dbList = new tb_method_5_1();
            $this->rowId2 = $this->dbList->get($type);

            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

}
