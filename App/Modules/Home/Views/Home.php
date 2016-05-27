<?php
  Use System\Template\Template;
  
  $template = new Template();
  $template->open();
?>
<div class="container">
      
    <div class="card">
            <a href="javascript:;" class="btn orange">Read First</a>   
            เวลา copmit ให้ export table ที่ตนทำไปไว้ใน folder  <b>tempFile</b>
            
    </div>
     <div class="card">
            <a href="?Login" class="btn">Login</a>   
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
         <a href="?Crop//1" class="btn " >พืชที่เเกษตรปลูก :Nu</a> <p>ไปสร้าง Module  Crop   จัดการพืชที่เกษตรกรคนนั้นปลูก เพิ่มลบแก้ไข (รับค่าจาก id url สมมุตเป็น 1 เป็นเกษตรกรที่เราจะเลือกจัดการพืชที่เขาปลูก จริงๆต้องรอติ้กทำเสร็จเราถึงจะเลิกเกษตรเกษตรจริง แต่อันนี้สมมุตว่าเราเลือก id 1 มาแล้ว เพื่อให้ทำ โมดูลนี้ได้โดยไม่ต้องรอ Tik)  click ดู table : <a href='#crop' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
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
         
    
    
    
    
</div>
 <?php
$template->close();
?>