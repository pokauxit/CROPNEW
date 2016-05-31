<?php

namespace App\Modules\ProblemControl\Controllers;

use App\Models\control AS tb_method_5;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        Validate::has($_POST['control_detail']);
        Validate::has($_POST['cmaount']);
        Validate::has($_POST['unit']);

        $STR = new tb_method_5();
        if ($STR->update($this->param(2))) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0) . '/' . $this->param(1));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }

}

?>