<?php
namespace System\Security;
use System\Utils\JS;
class ACL {
    public static function  check($ss,$cls = "Login"){
        $requestClass = "App\Modules\\".$cls."\\Controllers\\".$cls."";
        if($_SESSION[$ss]=="" || $_SESSION[$ss]==null){
            echo JS::re("?".$cls);
            exit();
        }
    }
}
?>
