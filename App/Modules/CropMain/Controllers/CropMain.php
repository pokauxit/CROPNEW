<?php
namespace App\Modules\CropMain\Controllers;
use System\HMVC\HMVC;

class CropMain extends HMVC{
    public function index() {
       
        if(SUBMIT){
            print_r($_POST);
            
        }else{
             $this->view();
        }
       
    }

}
