<?php
namespace App\Modules\BioFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\biofertilizer as btz; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new btz();
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