<?php

namespace App\Modules\CropApplication\Controllers;

use App\Models\application_method AS tb_method_1;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        if ($_POST['time_start']) {
            $_POST['time_start'] = date_format(date_create($_POST['time_start']), 'Y-m-d');
        }
        Validate::has($_POST['step_detail']);
        Validate::has($_POST['fertiltzer_peroid']);

        $sth = new tb_method_1();
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