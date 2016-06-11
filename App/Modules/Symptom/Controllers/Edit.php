<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 9:59
 */

namespace App\Modules\Symptom\Controllers;

use \App\Models\symptom as spm;
use System\HMVC\HMVC;
use System\Utils\JS;
use System\Utils\Validate;

class Edit extends HMVC
{

    public function index()
    {

        Validate::has("symptom_name");
        Validate::has("symptom_detail");

        $sth = new spm();
        if ($sth->update(ID)) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule().'///'. $this->param(1));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }
}