<?php
namespace App\Modules\BioFertilizer\Controllers;
 use System\HMVC\HMVC;
 use App\Models\biofertilizer as  bfz;
 use System\Utils\Validate;
 use System\Utils\JS;
 
 class Add extends HMVC{
     public function index() {
         Validate::has($_POST['type_fertilizer_id']);
         Validate::has($_POST['bio_fer_name']);
         Validate::has($_POST['bio_fer_properties']);
         
        $std =  new bfz();
        if($std->insert()){
            echo JS::addComplate();
            echo JS::re($this->route->backToModule().'///');
        }else{
            echo JS::addFail();
            echo JS::back();
        }
    }

  
}
?>


