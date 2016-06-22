<?php

namespace App\Modules\NewsItem\Controllers;
 use System\HMVC\HMVC;
 use App\Models\news_item as  nit;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['news_category_name']);
         Validate::has($_POST['news_title']);
         Validate::has($_POST['news_text']);
         
        $std =  new nit();
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
