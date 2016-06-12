<?php
namespace App\Modules\FertilizerUnit\Controllers;
 use System\HMVC\HMVC;
 use App\Models\fertilizer_unit;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['unit_name']);
         
        $std =  new fertilizer_unit();
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