<?php

error_reporting(0); // edit by tk
session_start();
session_regenerate_id(TRUE);
date_default_timezone_set('Asia/Bangkok');

try{

    require_once 'System/Base/AuxPHP.php';

}catch (Exception $ex){
   
        echo  $ex->getCode();
        echo "<br>";
        echo  $ex->getMessage();
}
?>
