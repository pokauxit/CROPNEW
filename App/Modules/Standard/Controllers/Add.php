<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 9:36
 */

namespace App\Modules\Standard\Controllers;

use \App\Models\standard as std;
use System\HMVC\HMVC;
use System\Utils\JS;
use System\Utils\Validate;

class Add extends HMVC
{

    public function index()
    {
        Validate::has("type_fertilizer_name");
        Validate::has("org");

        $sth = new std();
        if ($sth->insert()) {
            echo JS::addComplate();
            echo JS::re($this->route->backToModule()."///");
        } else {
            echo JS::addFail();
            echo JS::back();
        }
    }
}