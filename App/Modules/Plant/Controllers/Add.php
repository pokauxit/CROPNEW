<?php

namespace App\Modules\Plant\Controllers;
 use System\HMVC\HMVC;
 use App\Models\plant as  pln;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['type_id']);
         Validate::has($_POST['plant_name']);
         Validate::has($_POST['caltivated_area']);
         
        $std =  new pln();
        if($std->insert()){
            echo JS::addComplate();
            echo JS::re($this->route->backToModule().'///' . $this->param(1));
        }else{
            echo JS::addFail();
            echo JS::back();
        }
    }

  
}
?>
