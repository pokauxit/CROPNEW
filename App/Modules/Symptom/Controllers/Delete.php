<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 10:00
 */

namespace App\Modules\Symptom\Controllers;

use \App\Models\symptom as spm;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC
{

    public function index()
    {
        $sth = new spm();
        if ($sth->delete(ID)) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule() .'///'. $this->param(1));
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }
}