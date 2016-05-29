<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 14:11
 */

namespace App\Modules\DiseasePestWeed\Controllers;

use \App\Models\disease_pest_weed as dpw;
use System\HMVC\HMVC;
use System\Utils\JS;
use System\Utils\Validate;

class Add extends HMVC
{

    public function index()
    {
        Validate::has("disease_pest_weed_name");
        Validate::has("disease_pest_weed_detail");

        $sth = new dpw();
        if ($sth->insert()) {
            echo JS::addComplate();
            echo JS::re($this->route->backToModule());
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }
}