<?php

namespace App\Modules\Soil\Controllers;

use App\Models\soil AS tb_soil;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        Validate::has($_POST['soil_name']);
        Validate::has($_POST['soil_factor']);
        Validate::has($_POST['soil_problem']);
        Validate::has($_POST['soil_nutrition']);

        $sth = new tb_soil();
        if ($sth->update(ID)) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }

}

?>