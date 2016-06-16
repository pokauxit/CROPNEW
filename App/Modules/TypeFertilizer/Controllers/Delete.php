<?php
namespace App\Modules\TypeFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typefertilizer as tfz; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new tfz();
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
