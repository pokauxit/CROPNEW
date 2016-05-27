<?php

namespace System\HMVC;

use System\Route\Route;
use System\GlobalVar\GlobalVar;




$globalData = array();



abstract class HMVC {
    abstract public function index();

    public $route = "";
    protected  $globalVar;




    //
    public function  get($index,$value=null){
        if($value===null){
            return $this->globalVar->getGet($index);
        }else{
            $this->globalVar->setGet($index,$value);
        }
    }

    public function post($index,$value=null){
        if($value===null){
            return $this->globalVar->getPost($index);
        }else{
            $this->globalVar->setPost($index,$value);
        }
    }
    
    public function  session($index,$value=null){
         if($value===null){
            return $this->globalVar->getSession($index);
        }else{
            $this->globalVar->setSession($index,$value);
        }
    }
    
    public function cookie($index,$value=null,$time = null){
         if($value===null){
            return $this->globalVar->getCookie($index);
        }else{
            $this->globalVar->setCookie($index,$value,$time);
        }
    }

    ///
    
    
   public function __construct() { 
       $this->globalVar = new GlobalVar(); 
       $this->route = new Route();
   }

   protected function getName() {
        return get_class($this);
    }
    
    public function share($name,$value=null){
         global $globalData;
        if($value==null){
            return $globalData[$name];
        }else{
            $globalData[$name] = $value;
        }
    }
    
    public function view($view = null) {
        $exp = explode("\\", $this->getName());
        $nameSpace = "";
        for ($i = 0; $i < count($exp) - 2; $i++) {
            $nameSpace .= $exp[$i] . "/";
        }
        $nameSpace.="Views/";

        if (!$view) {
               $this->getName();
            global $_URL;
            
            if($exp['2']==$exp[4]){
                 $ss = $nameSpace . $_URL[0] . ".php";
            }else{
                 global $_URL;
                $ss = $nameSpace .$exp[4]. ".php";
            }
             
        } else {
           
            global $_URL;
              $ss = $nameSpace . $view . ".php";
        }
        if(!file_exists($ss)){
            echo $ss;
            throw new \Exception("View not found", 111, null);
        }
        require_once $ss;
    }

    public function controller($controller = null) {
        /**
         * ถ้าสั่ง controller มาจะเรียกตามชื่อ ถ้าไม่สั่งมาจะแรกตาม action นั้นๆ
         */
        $exp = explode("\\", $this->getName());
        $nameSpace = "";
        for ($i = 0; $i < count($exp) - 1; $i++) {
            $nameSpace .= $exp[$i] . "\\";
        }


        if (!$controller) {

            global $_URL;
            $ss = $nameSpace . $_URL[1];
        } else {
            $ss = $nameSpace . $controller;
        }
       $dd =  new $ss();
       $dd->index();
    }
    
    
    public function param($index){
         global $_URL;
         return $_URL[$index+2];
    }

}

?>
