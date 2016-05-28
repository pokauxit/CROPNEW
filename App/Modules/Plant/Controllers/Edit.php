<?php

namespace App\Modules\Plant\Controllers;
 use System\HMVC\HMVC;
 use App\Models\plant as  pln;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['type_id']);
         Validate::has($_POST['plant_name']);
         Validate::has($_POST['caltivated_area']);
         
        $std =  new pln();
        if($std->update(ID)){
            echo JS::editComplate();
            echo JS::re($this->route->backToModule());
        }else{
            echo JS::editFail();
            echo JS::back();
        }
    }

  
}
?>
