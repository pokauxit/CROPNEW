<?php

namespace App\Modules\Crop\Controllers;

use App\Models\Crop AS tb_crop;
use System\HMVC\HMVC;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        //Validate::has($_POST['']);

        $sth = new tb_crop();
        if ($sth->update($this->param(1))) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }

}

?>