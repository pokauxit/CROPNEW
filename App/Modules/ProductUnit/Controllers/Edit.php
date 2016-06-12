<?php
namespace App\Modules\ProductUnit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\product_unit;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['unit_name']);
         
        $std =  new product_unit();
        if($std->update(ID)){
            echo JS::editComplate();
            echo JS::re($this->route->backToModule().'///' . $this->param(1));
        }else{
            echo JS::editFail();
            echo JS::back();
        }
    }

  
}
?>