<?php
namespace App\Modules\BioFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\biofertilizer as  bfz;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Edit extends HMVC{
     public function index() {
         Validate::has($_POST['type_fertilizer_id']);
         Validate::has($_POST['bio_fer_name']);
         Validate::has($_POST['bio_fer_properties']);
         
        $std =  new bfz();
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