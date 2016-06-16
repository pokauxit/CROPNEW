<?php

namespace App\Modules\TypePlant\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typeplant as  tpl;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['type_name']);
         Validate::has($_POST['note']);
         
        $std =  new tpl();
        if($std->insert()){
            echo JS::addComplate();
            echo JS::re($this->route->backToModule()."///");
        }else{
            echo JS::addFail();
            echo JS::back();
        }
    }

  
}
?>
