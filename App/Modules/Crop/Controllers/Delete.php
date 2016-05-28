<?php

namespace App\Modules\Crop\Controllers;

use App\Models\crop AS tb_crop;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC {

    public function index() {
        $STR = new tb_crop();
        if ($STR->delete($this->param(1))) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule().'//'.$this->param(0));
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }

}
