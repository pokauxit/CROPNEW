<?php
  Use System\Template\Template;
  
  $template = new Template();
  $template->open();
?>
<div class="container">
    
    
    
    <div class="card">
            <a href="javascript:;" class="btn orange">Read First</a>   
            เวลา copmit ให้ export table ที่ตนทำไปไว้ใน folder  <b>tempFile</b>
            <br> หน้าตาทำให้เขากับ materializecss เลยครับ ไม่ยาก ถ้าติดให้ถาม หรือ ให้ remote ครับ <br>
            หรือ commit ขึ้นครับ หน้า add ,edit ทำ alert(); check ค่าว่างด้วย ใช้จาก JS Lib ถ้าไม่เป็นถามครับ ง่ายมากหัดเป็บเดียวได้เลย
            <hr><i class="red-text">ใครติดตรงไหน ถามได้เลยครับ</i>
    </div>
    
    
     
       <div class="card">
         <a href="?CropApplyFertilizer//1" class="btn " >การให้ปุ๋ย :Nu </a> <p>ไปสร้าง Module  CropApplyFertilizer    พี่ทำ layout ไว้แล้ว 
             ตัวนี้จะมี ส่ง id ของพืชที่ปลูกไปมาด้วยนะครับ  
      </div>
    
       <div class="card">
         <a href="?CropStandard//1" class="btn " >มาตรฐานการปลูกพืชนั้นๆ :Nu </a> <p>ไปสร้าง Module  CropStandard    พี่ทำ layout ไว้แล้ว 
             ตัวนี้จะมี ส่ง id ของพืชที่ปลูกไปมาด้วยนะครับ  
      </div>
    
    <div class="card">
         <a href="?CropApplication//1" class="btn " >ขึ้นตอนการปลูกพืชนั้นๆ :Nu </a> <p>ไปสร้าง Module  CropApplication    พี่ทำ layout ไว้แล้ว 
             ตัวนี้จะมี ส่ง id ของพืชที่ปลูกไปมาด้วยนะครับ  
      </div>
    
   
    
    
      <div class="card">
         <a href="?DiseasePestWeed" class="btn " >ปัญหาต่างๆของพืชที่มักพบ  :Tik</a> <p>ไปสร้าง Module  DiseasePestWeed     พิ่มลบแก้ไข  click ดู table : <a href='#Staff' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="DiseasePestWeed" class="modal">
                
              ส่ง csv ไปใน face 
                
           
                
                
                </div>
      </div>
    <div class="card">
         <a href="?Staff" class="btn " >เจ้าหน้าที่  :Nu</a> <p>ไปสร้าง Module  Staff     พิ่มลบแก้ไข  click ดู table : <a href='#Staff' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="Staff" class="modal">
                
               ใช้อันเดิมจากงานเก่า
                
           
                
                
                </div>
      </div>
    <div class="card">
         <a href="?Soil" class="btn " >ดิน  :Nu</a> <p>ไปสร้าง Module  Soil     พิ่มลบแก้ไข  click ดู table : <a href='#Staff' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="Soil" class="modal">
                
              ส่ง csv ไปใน face 
                
           
                
                
                </div>
      </div>
    
    <div class="card">
         <a href="?Symptom" class="btn " >อาการ   :Tik</a> <p>ไปสร้าง Module  Symptom   จัดการอาการผิดปกติของพืช click ดู table : <a href='#Symptom' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="Symptom" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: symptom   </td><td colspan="3">	 ลักษณะของอาการ  </b><br>
             <tr><td>   symptom_id       </td><td>       รหัสการ      </td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   symptom_name            </td><td>     ชื่อของอาหาร  	   </td><td>     varchar	100 </td><td>	not null </td></tr>
		<tr><td>   symptom_detail             </td><td>     รายละเอียดขงอาหาร    	   </td><td>     varchar	100 </td><td>	not null </td></tr>
		 
              </table>
                
           
                
                
                </div>
      </div>
    <div class="card">
         <a href="?Standard" class="btn " >มาตราฐาน  :Tik</a> <p>ไปสร้าง Module  Standard   จัดการมาตราฐาน พิ่มลบแก้ไข  click ดู table : <a href='#Standard' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="Standard" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: standard  </td><td colspan="3">	มาตรฐาน/รางวัล  </b><br>
             <tr><td>   sid     </td><td>       รหัสมาตรฐาน    </td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   type_fertilizer_name            </td><td>     ชื่อมาตรฐานที่ได้รับ  	   </td><td>     varchar	100 </td><td>	not null </td></tr>
		<tr><td>   org             </td><td>     สถาบันหรือน่วยงานที่กำหนดมฐ   	   </td><td>     varchar	100 </td><td>	not null </td></tr>
		 
              </table>
                
           
                
                
                </div>
      </div>
    
    
    
    
    <div class="card">
         <a href="?TypeFertilizer" class="btn " >ชนิดของปุ๋ย  :Jui</a> <p>ไปสร้าง Module  TypeFertilizer   จัดการชนิดของปุ๋ย (มีข้อมูล2ชนิด ไบโอเคมี และ ชีวภาพ  )เพิ่มลบแก้ไข  click ดู table : <a href='#TypeFertilizer' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="TypeFertilizer" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: type_fertilizer  </td><td colspan="3">	ชนิดของปุ๋ย </b><br>
             <tr><td>   type_fertiltzer_id     </td><td>       รหัสชนิด    </td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   type_fertilizer_name            </td><td>     ชื่อชนิดปุ๋ย 	   </td><td>     varchar	200 </td><td>	not null </td></tr>
		 
              </table>
                
           
                
                
                </div>
      </div>
    
     <div class="card">
         <a href="?BioFertilizer" class="btn " >ปุ๋ย  :Jui</a> <p>ไปสร้าง Module  BioFerilizer   จัดการชนิดปุ๋ยและสารชีวภาพ ( จะมีประเภทของปุ๋ย/สารชีภาพ  ที่ต้องเลือก ตอน add,edit,)เพิ่มลบแก้ไข  click ดู table : <a href='#BioFerilizer' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="BioFerilizer" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: bio_ferilizer  </td><td colspan="3">สารชีวภาพ/ปุ๋ย</b><br>
            
                   <tr><td>   bio_fer_id     </td><td>        รหัสสารชีวภาพ/ปุ๋ย  </td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   type_fertilizer_id            </td><td>     ชนิดปุ๋ย 	   </td><td>     integer	  </td><td>	not null  fk (type_fertilizer->type_fertiltzer_id)</td></tr>
		<tr><td>   bio_fer_name            </td><td>     ชื่อสารชีวภาพ/ปุ๋ย 	   </td><td>     varchar	100 </td><td>	not null </td></tr>
		<tr><td>   bio_fer_properties            </td><td>     คุณสมบัติสารชีวภาพ/ปุ๋ย 	   </td><td>     varchar	200 </td><td>	not null </td></tr>
		 
              </table>
                
           
                
                
                </div>
      </div>
    
    
     <div class="card">
         <a href="?TypePlant" class="btn " >ชนิดของพืช  :Jui</a> <p>ไปสร้าง Module  TypePlant   จัดการชนิดของพืช เพิ่มลบแก้ไข  click ดู table : <a href='#TypePlant' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="TypePlant" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: type_plant </td><td colspan="3">	ชนิดของพืช </b><br>
             <tr><td>   type_id     </td><td>       รหัสชนิดพืช       </td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   type_name              </td><td>    ชื่อชนิด 	   </td><td>     varchar	100 </td><td>	not null </td></tr>
             <tr><td>   note            </td><td>     หมายเหตุ	   </td><td>     varchar	200 </td><td>	can null </td></tr>
		 
              </table>
                
           
                
                
                </div>
      </div>
         
    
    <div class="card">
         <a href="?Plant" class="btn " >พืช  :Jui</a> <p>ไปสร้าง Module  Plant   จัดการพืช เพิ่มลบแก้ไข  มี dropdown จาก TypePlant ด้วยเลือกว่าพืชเป้นชนิดไหน click ดู table : <a href='#Plant' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="Plant" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: plant </td><td colspan="3">	รหัสพืช </b><br>
             <tr><td>   plant_id     </td><td>       รหัสชนิดพืช       </td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   type_id              </td><td>    ชื่อชนิด 	   </td><td>     integer  </td><td>	not null fk->type_plant </td></tr>
             <tr><td>   plant_name            </td><td>     ชื่อพืช 	   </td><td>     varchar	100 </td><td>	not null </td></tr>
            <tr><td>   caltivated_area            </td><td>     พื้นที่เพาะปลูก 	   </td><td>     varchar	200 </td><td>	not null </td></tr>
		 
              </table>
                
           
                
                
                </div>
      </div>
    
    
    
    <div class="card">
         <a href="?Ageiculturist" class="btn " >เกษตรกร :TIK</a> <p>ไปสร้าง Module  Ageiculturist   จัดการเกษตรกร เพิ่มลบแก้ไข (มีเลือกจังหวัด อำเภอ ตำบล jQuery )  click ดู table : <a href='#ageiculturist' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="ageiculturist" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: ageiculturist</td><td colspan="3">	ข้อมูลเกษตรกร</b><br>
             <tr><td>   agriculturist_id	</td><td>รหัสเกษตรกร</td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   home_no             </td><td>    บ้านเลขที่	   </td><td>     varchar	50 </td><td>	not null </td></tr>
             <tr><td>   phone_no            </td><td>     หมายเลขโทรศัพท์	   </td><td>     varchar	50 </td><td>	 null </td></tr>
		<tr><td> agriculturist_name</td><td>	ชื่อเกษตรกร</td><td>	varchar	100 </td><td>	not null </td></tr>	
             <tr><td>   tambon_id	    </td><td>   รหัสจังหวัด	</td><td>	integer  </td><td>	not null fk ->tumbon  </td></tr>
              </table>
                
                note: สร้าง module AutoProvince  เพื่อการเลีอกที่อยู่ด้วย  table จังหวัดก็ตามที่ tik ทำมา
                
                
                </div>
      </div>
    
    
    
     <div class="card">
         <a href="?Crop//1" class="btn " >พืชที่เเกษตรปลูก :Nu</a> <p>ไปสร้าง Module  Crop   จัดการพืชที่เกษตรกรคนนั้นปลูก เพิ่มลบแก้ไข (รับค่าจาก id url สมมุตเป็น 1 เป็นเกษตรกรที่เราจะเลือกจัดการพืชที่เขาปลูก จริงๆต้องรอติ้กทำเสร็จเราถึงจะเลิกเกษตรเกษตรจริง แต่อันนี้สมมุตว่าเราเลือก id 1 มาแล้ว เพื่อให้ทำ โมดูลนี้ได้โดยไม่ต้องรอ Tik) 
             <br> และมีการ ดึง list รายการพืช ออกมาเป็น option (dropdown) จากที่ jui ทำ แต่ไม่ต้องเราสร้างตารางแบบ jui และ make ข้อมูลใส่ไปก่อน จะได้ไม่ต้องรอกัน  
             
             click ดู table : <a href='#crop' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="crop" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: crop</td><td colspan="3">	พืชที่ปลูก </b><br>
             <tr><td>   crop_id	</td><td>   รหัสพืชที่ปลูก  </td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   plant_id             </td><td>    รหัสพืช	   </td><td>     integer </td><td>	not null fk->plant</td></tr>
             <tr><td>   argiculturist_id     </td><td>     รหัสเกษตร	   </td><td>     integer	  </td><td>		not null fk->ageiculturist </td></tr>
            <tr><td> sunlight  </td><td>	ปริมาณแสง </td><td>	varchar	50  </td><td>	not null </td></tr>	
             <tr><td>   water_source 	    </td><td>   แหล่งน้ำ  	</td><td>	varchar  100   </td><td>	not null  </td></tr>
             <tr><td>   wind  	    </td><td>   ความเร็วลม    	</td><td>	DOUBLE(7, 3)   </td><td>	not null  </td></tr>
            <tr><td>   spetial_information   	    </td><td>   ข้อมูลพิเศษ    	</td><td>	varchar  200    </td><td>	not null  </td></tr>
            
               </table>
                
                note: ฝากหาหน่วยวัดของความเร็วลมด้วย  เวลาทำฟอร์ม add,edit ให้ใส่ บอกด้านหลัง อ่อ เรื่อง id มีการโยนไปโยนมา เพราะ id ไม่ได้มีแค่ อันเดียวมี id ของเกษตรกรกำกับตลอด อันนี้เดี๋ยวพี่บอกพอถึงตรงนี้ให้ถามครับ 
                
                
                </div>
      </div>
         
    
    
    
    <div class="card">
         <a href="?CropApplication//1" class="btn " >หน้าลงรายละเอียดด้านต่างๆของการปลูกพืช :Pok</a> <p>ไปสร้าง Module  CropMain   จัดการรายละเอียดข้อมูลต่างๆของการปลูก เช่น พื้นที่ ขั้นตอน ดิน การให้ปุ๋ย ปัญหา สัชพืช โรค ศัตรูพืช  เป็นต้น
             
    
      </div>
    
    
    
    
    
</div>
 <?php
$template->close();
?>