<?php

namespace App\Modules\CropHarvest\Controllers;

use App\Models\harvest AS tb_method_2;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Add extends HMVC {

    public function index() {

        Validate::has($_POST['harvest_algorithm']);

        $STR = new tb_method_2();
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