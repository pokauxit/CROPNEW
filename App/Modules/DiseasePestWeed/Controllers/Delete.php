<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 16:04
 */

namespace App\Modules\DiseasePestWeed\Controllers;

use App\Models\disease_pest_weed as dpw;
use System\HMVC\HMVC;
use System\Utils\JS;

class Delete extends HMVC
{

    public function index()
    {
        $sth = new dpw();
        if ($sth->delete(ID)) {
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule().'///' . $this->param(1));
        } else {
            echo JS::deleteFail();
            echo JS::back();
        }
    }
}