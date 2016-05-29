<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 9:55
 */

namespace App\Modules\Symptom\Controllers;

use \App\Models\symptom as spm;
use System\HMVC\HMVC;
use System\Utils\JS;
use System\Utils\Validate;

class Add extends HMVC
{

    public function index()
    {
        Validate::has("symptom_name");
        Validate::has("symptom_detail");

        $sth = new spm();
        if ($sth->insert()) {
            echo JS::addComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }
}