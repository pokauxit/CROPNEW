<?php

/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 31/5/2559
 * Time: 10:20
 */

namespace App\Modules\DiseaseSymptom\Controllers;

use App\Models\disease_pest_weed as dpw;
use App\Models\symptom as spm;
use App\Models\disease_symptom as dsm;
use System\HMVC\HMVC;
use System\Utils\JS;
use System\Security\ACL;

class DiseaseSymptom extends HMVC {

    protected $diseasePestWeeds;
    protected $db;
    protected $rowId;
    protected $diseasePests;
    protected $symptoms;

    public function __construct() {
        ACL::check("STAFF");
        parent::__construct();
    }

    public function index() {
        $this->diseasePestWeeds = new dpw();
        $this->diseasePestWeeds->where = "disease_pest_weed_id='" . ID . "'";
        $this->diseasePestWeeds->select();

        $this->db = new dsm();
        $this->db->where = "disease_pest_weed_id='" . ID . "'";
        $this->db->left("symptom_id", "symptom.symptom_name");
        $this->view();
    }

    public function Add() {
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->diseasePests = new dpw();
            $this->diseasePests->select();

            $this->symptoms = new spm();
            $this->symptoms->select();
            $this->view("Add");
        }
    }

    public function Edit() {
        $this->db = new dsm();
        if (SUBMIT) {
            $this->controller();
        } else {
            $this->symptoms = new spm();
            $this->symptoms->select();

            $this->rowId = $this->db->get($this->param(1));
            $this->view("Edit");
        }
    }

    public function Delete() {
        $this->controller();
    }

    public function getSymptom() {
        $this->db = new dsm();
        $this->db->where = "disease_pest_weed_id='".$_POST['id1']."'";
        $this->db->select();
        $this->view("getSymptom");
    }

}
