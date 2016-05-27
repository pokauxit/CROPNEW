<?php
namespace System\Security;


class Security {
    
      public static  function num($num){
        if(is_numeric($num)){
            return $num;
        }else{
            return FALSE;
        }
    }
    
    public static  function key($key,$lenght=6){
        if(preg_match('/^[a-zA-Z0-9]{'.$lenght.'}$/',$key)){
             return $key;
        }else{
             return FALSE;
        } 
    }
    
    public static  function id($id,$lenght=6){
        if(preg_match('/^[0-9]{1,'.$lenght.'}$/',$id)){
             return $id;
        }else{
             return FALSE;
        } 
    }
    
}

?>
