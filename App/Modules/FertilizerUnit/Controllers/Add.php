<?php
namespace App\Modules\FertilizerUnit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\fertilizer_unit;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['unit_name']);
         
        $std =  new fertilizer_unit();
        if($std->insert()){
            echo JS::addComplate();
            echo JS::re($this->route->backToModule().'///');
        }else{
            echo JS::addFail();
            echo JS::back();
        }
    }

  
}
?>


