<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 31/5/2559
 * Time: 10:53
 */

namespace App\Modules\DiseaseSymptom\Controllers;

use App\Models\disease_symptom as dsm;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Add extends HMVC
{

    public function index()
    {
        Validate::has("detail");

        $sth = new dsm();
        if ($sth->insert()) {
            echo JS::addComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }
}