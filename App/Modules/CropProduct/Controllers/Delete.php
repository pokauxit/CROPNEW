<?php

namespace App\Modules\CropProduct\Controllers;

use App\Models\product AS tb_method_2;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC {

    public function index() {
        $STR = new tb_method_2();
        if ($STR->delete($this->param(1))) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }

}
