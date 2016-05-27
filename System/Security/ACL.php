<?php
namespace System\Security;

class ACL {
    public static function  check($ss,$cls = "Login"){
        $requestClass = "App\Modules\\".$cls."\\Controllers\\".$cls."";
        if($_SESSION[$ss]==="" || $_SESSION[$ss]==""){
            $app = new $requestClass;
            $app->index();
            exit();
        }
    }
}
?>
