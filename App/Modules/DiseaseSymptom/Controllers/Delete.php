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
use System\Utils\JS;

class Delete extends HMVC
{

    public function index()
    {
        $sth = new dsm();
        if ($sth->delete($this->param(1))) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule() . '//' . $this->param(0));
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }
}