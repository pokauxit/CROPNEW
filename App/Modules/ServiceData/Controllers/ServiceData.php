<?php
namespace App\Modules\ServiceData\Controllers;
use System\HMVC\HMVC;


class ServiceData extends HMVC{
    public function index() {
        
    }
    
    public function getCropByID($id){
        /**
         * $tb = new tb();
         *return $tb->get($id);
         * **/
    }
    public function showAgeiculturist($id){
          $this->view("Ageiculturist");
    }
    
    public function showPlant($id){
        $this->view("Plant");
    }
}
