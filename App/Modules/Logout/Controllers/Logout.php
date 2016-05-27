<?php
 
 namespace App\Modules\Logout\Controllers;
 use System\HMVC\HMVC;
 
 
 class Logout extends HMVC{
     public function index() {
        //$this->session("STAFF","");
         //print_r($this->session("STAFF"));
         $this->session("STAFF","");
         
         echo  "Logut success.";
    }

}
 
?>
