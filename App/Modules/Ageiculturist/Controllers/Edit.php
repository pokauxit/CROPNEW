<?php

namespace App\Modules\Ageiculturist\Controllers;
use App\models\ageiculturist as agl;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC
{
    public function index()
    {
        Validate::has($_POST['home_no']);
        Validate::has($_POST['phone_no']);
        Validate::has($_POST['agriculturist_name']);

        $sth = new agl();
        if ($sth->update(ID)) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule(). '///'. $this->param(1));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }


}

?>
