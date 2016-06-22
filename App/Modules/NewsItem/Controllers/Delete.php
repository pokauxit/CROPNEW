<?php
namespace App\Modules\NewsItem\Controllers;
 use System\HMVC\HMVC;
 use App\Models\news_item as nit; 
 use System\Utils\JS;
 
 class Delete extends HMVC{
     public function index() {
        $std =  new nit();
        if($std->delete(ID)){
            echo JS::deleteComplate();
            echo JS::re($this->route->backToModule().'///' . $this->param(1));
        }else{
            echo JS::deleteFail();
            echo JS::back();
        }
    }

  
}
?>
