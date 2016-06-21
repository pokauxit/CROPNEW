<?php

namespace App\Modules\CropProblem\Controllers;

use App\Models\crop_problem AS tb_method_6;
use App\Models\symptom_problem;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        Validate::has($_POST['crop_problem_detail']);
        Validate::has($_POST['note']);

        $STR = new tb_method_6();
        if ($STR->update($this->param(1))) {
            $symptom_problem = new symptom_problem();
            $symptom_problem->deleteWhere("crop_problem_id=". $this->param(1));
            $_POST['crop_problem_id'] = $this->param(1);
            foreach ($_POST['symptom'] as $k => $v) {
                if ($v != '') {
                    $_POST['symptom_id'] = $v;
                    $symptom_problem->insert();
                }
            }
            echo JS::editComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }

}

?>