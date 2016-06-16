<?php

namespace App\Modules\TypePlant\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typeplant as  tpl;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['type_name']);
         Validate::has($_POST['note']);
         
        $std =  new tpl();
        if($std->update(ID)){
            echo JS::editComplate();
            echo JS::re($this->route->backToModule()."///".$this->param(1));
        }else{
            echo JS::editFail();
            echo JS::back();
        }
    }

  
}
?>
