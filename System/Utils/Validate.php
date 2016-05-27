<?php
namespace System\Utils;

class Validate{
    public static function  has($post){
        if(!$post){
          echo "Request some field";
          exit();  
        } 
    }
    
    public function email(){
        
    }
    
    public static function  number($post){
        if(!is_numeric($post)) {
          echo "Data field";
          exit();  
        } 
    }
    
    public function html(){
        
    }
}
 

?>
