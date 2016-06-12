<?php
namespace App\Modules\FertilizerUnit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\fertilizer_unit; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new fertilizer_unit();
        if($std->delete(ID)){
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule().'///' . $this->param(1));
        }else{
            echo JS::deleteFail();
            echo JS::back();
        }
    }

  
}
?>