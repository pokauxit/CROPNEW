<?php
/**
 * Created by PhpStorm.
 * User: Error404
 * Date: 29/5/2559
 * Time: 9:39
 */

namespace App\Modules\Standard\Controllers;

use \App\Models\standard as std;
use System\Utils\Validate;
use System\Utils\JS;
use System\HMVC\HMVC;

class Edit extends HMVC
{

    public function index()
    {
        Validate::has("type_fertilizer_name");
        Validate::has("org");

        $sth = new std();
        if ($sth->update(ID)) {
            echo JS::editComplate();
            echo JS::re($this->route->backToModule()."///".$this->param(1));
        } else {
            echo JS::editFail();
            echo JS::back();
        }
    }
}