<?php

namespace App\Modules\Soil\Controllers;

use App\Models\soil AS tb_soil;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Add extends HMVC {

    public function index() {

        Validate::has($_POST['soil_name']);
        Validate::has($_POST['soil_factor']);
        Validate::has($_POST['soil_problem']);
        Validate::has($_POST['soil_nutrition']);

        $STR = new tb_soil();
        if ($STR->insert()) {
            echo JS::addComplate();
            echo JS::re($this->route->backToModule()."///");
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }

}

?>