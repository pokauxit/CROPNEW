<?php

namespace App\Modules\CropProblem\Controllers;

use App\Models\crop_problem AS tb_method_6;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        Validate::has($_POST['crop_problem_detail']);
        Validate::has($_POST['note']);

        $STR = new tb_method_6();
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