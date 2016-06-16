<?php
namespace App\Modules\TypePlant\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typeplant as tpl; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new tpl();
        if($std->delete(ID)){
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule()."///".$this->param(1));
        }else{
            echo JS::deleteFail();
            echo JS::back();
        }
    }

  
}
?>
