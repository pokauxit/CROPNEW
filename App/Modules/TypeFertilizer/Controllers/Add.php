<?php
namespace App\Modules\TypeFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typefertilizer as  tfz;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['type_fertilizer_id']);
         Validate::has($_POST['type_fertilizer_name']);
         
        $std =  new tfz();
        if($std->insert()){
            echo JS::addComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::addFail();
            echo JS::back();
        }
    }

  
}
?>
