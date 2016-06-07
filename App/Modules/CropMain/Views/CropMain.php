<?php
 use System\Template\Template;
 $template = new Template();
 $template->open();
 $template->nav1level();
 ?>
 <div class="container" id="container-center">

 
     <div class="row card center-align" style="padding: 10px;">
          
         <h4 class="center">เมนูหลัก</h4>
         
    <div class="col s5 m2 menu-item">
      <a href="?Staff"> <p class="z-depth-1 center">Staff</p></a>
    </div>
         
    <div class="col s5 m2 menu-item">
      <a href="?Ageiculturist"> <p class="z-depth-1 center">เกษตรกร</p></a>
    </div>
         
    <div class="col s5 m2 menu-item">
      <a href="?Soil"> <p class="z-depth-1 center">ดิน</p></a>
    </div>
         
   <div class="col s5 m2 menu-item">
      <a href="?DiseasePestWeed"> <p class="z-depth-1 center">ปัญหาของพืชที่มักพบ</p></a>
    </div>
         
         
    <div class="col s5 m2 menu-item">
      <a href="?Symptom"> <p class="z-depth-1 center">อาการของพืชที่เป็นโรค</p></a>
    </div>
         
    
       <div class="col s5 m2 menu-item">
      <a href="?Standard"> <p class="z-depth-1 center">มาตรฐาน</p></a>
    </div>
         
      
         
        <div class="col s5 m2 menu-item">
      <a href="?TypeFertilizer"> <p class="z-depth-1 center">ประเภทของปุ๋ย</p></a>
    </div>
     
     <div class="col s5 m2 menu-item">
      <a href="?BioFertilizer"> <p class="z-depth-1 center">ปุ๋ย</p></a>
    </div>
         
          
        <div class="col s5 m2 menu-item">
      <a href="?TypePlant"> <p class="z-depth-1 center">ชนิดพืช</p></a>
    </div>
     
     <div class="col s5 m2 menu-item">
      <a href="?Plant"> <p class="z-depth-1 center">พืช</p></a>
    </div>
            
         
     </div>
     </div>
<?
 
 $template->close()
 
 
 

 ?>