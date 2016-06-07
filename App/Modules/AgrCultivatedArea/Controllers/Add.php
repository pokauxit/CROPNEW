<?php

namespace App\Modules\AgrCultivatedArea\Controllers;

use App\Models\cultivated_area AS tb_method_4;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Add extends HMVC {

    public function index() {

        Validate::has($_POST['area_detail']);
        Validate::has($_POST['soil_drainage']);

        $STR = new tb_method_4();
        if ($STR->insert()) {
            echo JS::addComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }

}

?>