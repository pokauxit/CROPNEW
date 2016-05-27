<?php
 
namespace System\Route;
class Route {
     var $url;
     public function __construct() {
         global $_URL;
         $this->url = $_URL;
     }

     public  function add(){
        return "?".$this->url[0]."/Add";
     }
     
     public  function edit($id){
        return "?".$this->url[0]."/Edit/".$id;
     }
     
     public  function delete($id){
        return "?".$this->url[0]."/Delete/".$id;
     }
     
     public  function view($id){
        return "?".$this->url[0]."/View/".$id;
     }
     
     
      public function go($act){
          return "?".$this->url[0]."/".$act."/";
     }
     
     public function backToModule(){
          return "?".$this->url[0];
     }
     
}
?>
