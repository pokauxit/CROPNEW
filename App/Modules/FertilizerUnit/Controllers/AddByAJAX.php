<?php
namespace App\Modules\FertilizerUnit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\fertilizer_unit;
 use System\Utils\Validate;
 
 class AddByAJAX extends HMVC{
     public function index() {
         Validate::has($_POST['unit_name']);
         
        $std =  new fertilizer_unit();
        if($std->insert()){
            echo 'Success';
        }
    }
}
?>


