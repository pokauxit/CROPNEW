<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 31/5/2559
 * Time: 11:25
 */

namespace App\Modules\DiseaseSymptom\Controllers;

use App\Models\disease_symptom as dsm;
use System\HMVC\HMVC;
use System\Utils\Validate;
use System\Utils\JS;

class Edit extends HMVC
{

    public function index()
    {
        Validate::has("detail");

        $sth = new dsm();
        if ($sth->update($this->param(1))) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }
}