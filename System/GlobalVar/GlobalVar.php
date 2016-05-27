<?php
 namespace System\GlobalVar;
class GlobalVar {
    public function setSession($index,$value){
        $_SESSION[$index] = $value;
    }
    public function  getSession($index){
        return  $_SESSION[$index];
    }
     public function setPost($index,$value){
        $_POST[$index] = $value;
    }
    public function  getPost($index){
        return  $_POST[$index];
    }
     public function setGet($index,$value){
        $_GET[$index] = $value;
    }
    public function  getGet($index){
        return  $_GET[$index];
    }
     public function setCookie($index,$value,$time = 300){
        setcookie($index,$value,time()+$time);
    }
    public function  getCookie($index){
        return  $_COOKIE[$index];
    }
}
 ?>
