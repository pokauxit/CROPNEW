<?php
namespace App\Modules\ProductUnit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\product_unit;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['unit_name']);
         
        $std =  new product_unit();
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


