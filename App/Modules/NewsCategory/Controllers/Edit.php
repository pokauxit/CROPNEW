<?php

namespace App\Modules\NewsCategory\Controllers;
 use System\HMVC\HMVC;
 use App\Models\news_category as nct;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['news_category_name']);
         
        $std =  new nct();
        if($std->update(ID)){
            echo JS::editComplate();
            echo JS::re($this->route->backToModule()."///".$this->param(1));
        }else{
            echo JS::editFail();
            echo JS::back();
        }
    }

  
}
?>
