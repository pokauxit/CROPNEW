<?php

namespace App\Modules\CropProblem\Controllers;

use App\Models\crop_problem AS tb_method_6;
use App\Models\symptom_problem;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Add extends HMVC {

    public function index() {

        Validate::has($_POST['crop_problem_detail']);
        Validate::has($_POST['note']);

        $STR = new tb_method_6();
        if ($STR->insert()) {
            $symptom_problem = new symptom_problem();
            $_POST['crop_problem_id'] = $STR->last_id();
            foreach ($_POST['symptom'] as $k => $v) {
                if ($v != '') {
                    $_POST['symptom_id'] = $v;
                    $symptom_problem->insert();
                }
            }
            echo JS::addComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }

}

?>