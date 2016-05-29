<?php
 
 namespace App\Modules\Logout\Controllers;
 use System\HMVC\HMVC;
use System\Utils\JS;


class Logout extends HMVC{
     public function index() {
         $this->session("STAFF","");
         echo  JS::re("?");
    }

}
 
?>
