<?php
namespace App\Modules\Plant\Controllers;
 use System\HMVC\HMVC;
 use App\Models\plant as pln; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new pln();
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
