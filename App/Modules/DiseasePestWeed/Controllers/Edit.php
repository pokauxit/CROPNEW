<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 15:52
 */

namespace App\Modules\DiseasePestWeed\Controllers;

use App\Models\disease_pest_weed as dpw;
use System\HMVC\HMVC;
use System\Utils\JS;
use System\Utils\Validate;

class Edit extends HMVC
{

    public function index()
    {

        Validate::has("disease_pest_weed_name");
        Validate::has("disease_pest_weed_detail");

        $sth = new dpw();
        if ($sth->update(ID)) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule() .'///'. $this->param(1));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }
}