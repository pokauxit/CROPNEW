<?php

namespace App\Modules\ProblemControl\Controllers;

use App\Models\crop_problem as cpm;
use App\Models\control AS tb_method_5;
use App\Models\biofertilizer AS tb_method_5_1;
use System\HMVC\HMVC;

class ProblemControl extends HMVC
{

    protected $problems;
    protected $db;
    protected $dbList;
    protected $rowId;
    protected $rowId2;

    public function __construct()
    {

        parent::__construct();
    }

    public function index()
    {
        $this->db = new tb_method_5();
        $this->db->where = "crop_problem_id='" . $this->param(1) . "'";
        $this->db->orderSort = "control_id ASC";
        $this->db->left('bio_fer_id', 'biofertilizer.bio_fer_name');


        $this->problems = new cpm();
        $this->problems->where = "crop_problem_id='" . $this->param(1) . "'";
        $this->problems->select();

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

    public function Delete()
    {
        $this->controller();
    }

}
