<?php
namespace App\Modules\ProductUnit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\product_unit;
 use System\Utils\Validate;
 
 class AddByAJAX extends HMVC{
     public function index() {
         Validate::has($_POST['unit_name']);
         
        $std =  new product_unit();
        if($std->insert()){
            echo 'Success';
        }
    }
}
?>


