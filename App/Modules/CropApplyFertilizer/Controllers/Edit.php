<?php

namespace App\Modules\CropApplyFertilizer\Controllers;

use App\Models\apply_fertilizer AS tb_method_5;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        Validate::has($_POST['apply_fertiltzer_unit']);
        Validate::has($_POST['appy_fertilizer_frequency']);

        $STR = new tb_method_5();
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