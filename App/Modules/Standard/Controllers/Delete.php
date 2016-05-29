<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 9:45
 */

namespace App\Modules\Standard\Controllers;

use \App\Models\standard as std;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC
{

    public function index()
    {
        $sth = new std();
        if ($sth->delete(ID)) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }
}