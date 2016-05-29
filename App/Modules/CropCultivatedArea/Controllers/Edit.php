<?php

namespace App\Modules\CropCultivatedArea\Controllers;

use App\Models\cultivated_area AS tb_method_4;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        Validate::has($_POST['area_detail']);
        Validate::has($_POST['soil_drainage']);

        $STR = new tb_method_4();
        if ($STR->update($this->param(1))) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }

}

?>