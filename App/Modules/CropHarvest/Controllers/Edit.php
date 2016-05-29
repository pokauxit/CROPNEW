<?php

namespace App\Modules\CropHarvest\Controllers;

use App\Models\harvest AS tb_method_2;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        Validate::has($_POST['unit']);

        $STR = new tb_method_2();
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