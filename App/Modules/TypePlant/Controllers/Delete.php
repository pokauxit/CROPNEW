<?php

namespace App\Modules\Standard\Controllers;
 use System\HMVC\HMVC;
 use App\Models\standard as  std; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new std();
        if($std->delete(ID)){
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::deleteFail();
            echo JS::back();
        }
    }

  
}
?>
