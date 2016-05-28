<?php

namespace App\Modules\Staff\Controllers;

use App\Models\staff AS tb_staff;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC {

    public function index() {
        $STR = new tb_staff();
        if ($STR->delete(ID)) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }

}
