<?php

namespace App\Modules\ProblemControl\Controllers;

use App\Models\control AS tb_method_5;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Add extends HMVC {

    public function index() {

        Validate::has($_POST['control_detail']);
        Validate::has($_POST['cmaount']);
        Validate::has($_POST['unit']);

        $STR = new tb_method_5();
        if ($STR->insert()) {
            echo JS::addComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0) . '/' . $this->param(1));
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }

}

?>