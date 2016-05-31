<?php

namespace App\Modules\ProblemControl\Controllers;

use App\Models\control AS tb_method_5;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC {

    public function index() {
        $STR = new tb_method_5();
        if ($STR->delete($this->param(2))) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0) . '/' . $this->param(1));
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }

}
