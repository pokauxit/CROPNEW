<?php

namespace App\Modules\Standard\Controllers;
 use System\HMVC\HMVC;
 use App\Models\standard as  std;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['standard_name']);
         Validate::has($_POST['org']);
         
        $std =  new std();
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
