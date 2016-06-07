<?php

namespace App\Modules\Staff\Controllers;

use App\Models\staff AS tb_staff;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC {

    public function index() {

        Validate::has($_POST['staff_user']);
  
        Validate::has($_POST['staff_name']);
    
        $sth = new tb_staff();
        if ($sth->update(ID)) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }

}

?>