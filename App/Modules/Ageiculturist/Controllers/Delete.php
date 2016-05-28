<?php

namespace App\Modules\Ageiculturist\Controllers;
use App\models\ageiculturist as agl;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC
{
    public function index()
    {
        $sth = new agl();
        if ($sth->delete(ID)) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }


}

?>
