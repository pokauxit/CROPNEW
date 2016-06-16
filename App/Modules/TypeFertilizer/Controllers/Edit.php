<?php
namespace App\Modules\TypeFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\typefertilizer as  tfz;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['type_fertilizer_name']);
         
        $std =  new tfz();
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

