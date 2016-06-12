<?php

namespace App\Modules\ServiceData\Controllers;

use System\HMVC\HMVC;
use App\Models\crop;
use App\Models\plant as pln;
use App\Models\ageiculturist as agl;
use App\Models\tambon;
use App\Models\amphur;
use App\Models\province;
use App\Models\soil;

class ServiceData extends HMVC {

    protected $dbPlant;
    protected $db;
    protected $dbSoil;

    public function index() {
        if (!empty($_POST['showPlant'])) {
            $this->showPlant($_POST['showPlant']);
        }
    }

    public function getCropByID($id) {

        $tb = new crop();
        return $tb->get($id);
    }

    public function showAgeiculturist($id) {
        $this->db = new agl();

        $tumbon = new tambon();
        $tumbon->display = "tambon_name";
        $tumbon->fk = "amphur_id";

        $amphur = new amphur();
        $amphur->fk = "province_id";
        $amphur->display = "amphur_name";
        $amphur->moreDisplay = "postcode";

        $province = new province();
        $province->display = "province_name";

        $this->db->where = $this->db->pk() . "=" . $id;
        $this->db->multiLeftJoin("tambon_id", array($tumbon, $amphur, $province));

        $this->view("Ageiculturist");
    }

    public function getAgeiculturist($id) {

        $this->db = new agl();
        return $this->db->get($id);
    }

    public function showPlant($id) {
        $this->dbPlant = new pln();
        $this->dbPlant->where = $this->dbPlant->pk() . "=" . $id;
        $this->dbPlant->left("type_id", "typeplant.type_name");
        $this->view("Plant");
    }

    public function getPlant($id) {
        $this->db = new pln();
        return $this->db->get($id);
    }
    
    public function showSoil() {
        $id = $_POST['value'];
        $this->dbSoil = new soil();
        $this->dbSoil->where = $this->dbSoil->pk() . "=" . $id;
        $this->dbSoil->select();
//$this->dbPlant->left("type_id", "typeplant.type_name");
        $this->view("Soil");
    }

}
