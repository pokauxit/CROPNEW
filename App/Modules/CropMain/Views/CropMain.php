<?php
 use System\Template\Template;
 $template = new Template();
 $template->open();
 ?>
<div class="container">
    
     <div class="card">

             ข้อมูลเกษตร
   </div>
     

     <div class="card">
             ข้อมูลพืชที่ปลูก
   </div>

    
      <div class="card">
            <div class="row">
    <div class="col s12">
      <ul class="tabs maincrop">
        <li class="tab col s3"><a href="#test1">ขั้นตอนการปลูก</a></li>
        <li class="tab col s3"><a class="active" href="#test2">การเก็บเกี่ยว</a></li>
        <li class="tab col s3 "><a href="#test3">ผลผลิต</a></li>
        <li class="tab col s3"><a href="#test4">พื้นที่เพาะปลูก</a></li>
            <li class="tab col s3"><a href="#test5">การให้ปุ๋ย</a></li>
              <li class="tab col s3"><a href="#test6">มาตฐาน</a></li>
               <li class="tab col s3"><a href="#test7">ปัญหาและการควบคุม</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">Test 1</div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
     <div id="test5" class="col s12">Test 5</div>
       <div id="test6" class="col s12">Test 6</div>
         <div id="test7" class="col s12">Test 7</div>
  </div>
 
   </div>

    
    
</div>
<?
 
 $template->close()
 
 
 

 ?>