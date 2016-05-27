<?php
    require_once 'System/Config/Init.php';

    $_URL = array();
    $url_pettern = explode("?",$_SERVER['REQUEST_URI']);
     if($url_pettern[0][strlen($url_pettern[0])-1]!="/"){
            echo "Error 404.";
            exit();
    }
    
    // Split request to URL pettern
    foreach($_GET as $key => $val){
            $_URL = explode("/",$key);
            break;
    }	
    
    //Not class request
    if(!$_URL[0]){
        $_URL[0] = DEFAULT_MODULE;
    } 
    
    if(!$_URL[1]){
        $_URL[1] = DEFAULT_ACTION;
    }  

 
 unset($url_pettern);
 require_once 'System/Config/Config.php'; 
 
 
 /**
  *  Autoloader class and funtion 
  * @param type $class
  * @throws Exception
  */
function __autoload($class) {
   $cls = str_replace("\\", "/", $class);
       if(file_exists($cls.'.php')){
            
           require_once $cls.'.php';  
       }else{ echo $cls;
           throw new Exception("Class not found.", 11,null);
       
       } 
}
 
 
 $requestClass = "App\Modules\\".$_URL[0]."\\Controllers\\".$_URL[0]."";
 $app = new  $requestClass ();
 $requestMethod =  $_URL[1];
 
 if(!method_exists($app,$requestMethod)){
     echo $requestMethod;
         throw new Exception("Method not found.", 11,null);
 }
 
 $app->$requestMethod();
 
?>
