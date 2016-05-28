<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 27/5/2559
 * Time: 20:23
 */

namespace App\Modules\AutoProvince\Controllers;


use App\Models\province;
use App\Models\amphur;
use App\Models\tambon;
use System\HMVC\HMVC;

class AutoProvince extends HMVC
{
    protected $provinces;
    protected $amphurs;
    protected $tambons;

    public function index()
    {
        if ($_POST['action'] == 'province_id') {
            $this->getAmphur($_POST['value']);
        } elseif ($_POST['action'] == 'amphur_id') {
            $this->getTambon($_POST['value']);
        }

    }

    public function getProvinceAll() {
        $this->provinces = new province();
        $this->provinces->select();
        $this->view("Province");
    }

    public function getAmphur($id)
    {
        $this->amphurs = new amphur();
        $this->amphurs->find("province_id = " . $id);
        $this->view("Amphur");
    }

    public function getTambon($id)
    {
        $this->tambons = new tambon();
        $this->tambons->find("amphur_id = " . $id);
        $this->view("Tambon");
    }
}