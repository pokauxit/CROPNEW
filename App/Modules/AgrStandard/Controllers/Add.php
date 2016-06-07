<?php

namespace App\Modules\AgrStandard\Controllers;

use App\Models\agr_standard AS tb_method_6;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Add extends HMVC {

    public function index() {

        Validate::has($_POST['start_year']);
        Validate::has($_POST['end_year']);
        Validate::has($_POST['remark']);

        $STR = new tb_method_6();
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