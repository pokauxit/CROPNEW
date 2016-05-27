<?php
 namespace System\Utils;
 class JS{
     static  $addComp = "เพิ่มข้อมูลเรียบร้อยค่ะ";
     static  $addFail = "ผิดพลาด!!! ไม่สามารถเพิ่มข้อมูลได้ค่ะ";
     static  $editComp = "แก้ไขข้อมูลเรียบร้อยค่ะ";
     static  $editFail = "ผิดพลาด!!! ไม่สามารถแก้ไขมูลได้ค่ะ";
     static  $deleteComp = "ลบข้อมูลเรียบร้อยค่ะ";
     static  $deleteFail = "ผิดพลาด!!! ไม่สามารถลบข้อมูลได้ค่ะ";

     public static function alert($msg){
         return "<script>alert('".$msg."');</script>";
     }
     
     public static  function  addComplate(){
         return JS::alert(JS::$addComp);
     }
     
     public static  function  addFail(){
         return JS::alert(JS::$addFail);
     }
     
     public static  function  editComplate(){
         return JS::alert(JS::$editComp);
     }
     
      public static  function  editFail(){
         return JS::alert(JS::$editFail);
     }
     
      public static  function  deleteComplate(){
         return JS::alert(JS::$deleteComp);
     }
     
      public static  function  deleteFail(){
         return JS::alert(JS::$deleteFail);
     }
     
     public static function  back(){
         return "<script>window.history.back();</script>";
     }
     
     public static function  re($url){
         return "<script>window.location.href='".$url."';</script>";
     }
     public static function load(){
         return   '<script type="text/javascript" src="System/Utils/JS.js"></script>';
     }
     
     public static function jquery(){
          return   '<script type="text/javascript" src="System/Utils/jquery-2.2.3.js"></script>';
     }
     
 }

 ?>
