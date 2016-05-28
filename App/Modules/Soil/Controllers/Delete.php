<?php

namespace App\Modules\Soil\Controllers;

use App\Models\soil AS tb_soil;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC {

    public function index() {
        $STR = new tb_soil();
        if ($STR->delete(ID)) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }

}
