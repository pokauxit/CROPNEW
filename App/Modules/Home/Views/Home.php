<?php
  Use System\Template\Template;
  
  $template = new Template();
  $template->open();
?>
<div class="container">
      
    
     <div class="card">
            <a href="?Login" class="btn">Login</a>   
      </div>
    
     <div class="card">
         <a href="?Ageiculturist" class="btn " >เกษตรกร</a> <p>ไปสร้าง Module  Ageiculturist   จัดการเกษตรกร เพิ่มลบแก้ไข (มีเลือกจังหวัด อำเภอ ตำบล jQuery )  click ดู table : <a href='#ageiculturist' class="modal-trigger"><i class="material-icons">view_list</i></a>
             
            <div  id="ageiculturist" class="modal">
                
               <table class="bordered">
                   <tr><td >Table: ageiculturist</td><td colspan="3">	ข้อมูลเกษตรกร</b><br>
             <tr><td>   agriculturist_id	</td><td>รหัสเกษตรกร</td><td>	integer	 </td><td>	pk auto	 </td></tr>
             <tr><td>   home_no             </td><td>    บ้านเลขที่	   </td><td>     varchar	50 </td><td>	not null </td></tr>
             <tr><td>   phone_no            </td><td>     หมายเลขโทรศัพท์	   </td><td>     varchar	50 </td><td>	 null </td></tr>
		<tr><td> agriculturist_name</td><td>	ชื่อเกษตรกร</td><td>	varchar	100 </td><td>	not null </td></tr>	
             <tr><td>   tambon_id	    </td><td>   รหัสจังหวัด	</td><td>	integer  </td><td>	not null  </td></tr>
              </table>
                
                note: สร้าง module AutoProvince  เพื่อการเลีอกที่อยู่ด้วย  table จังหวัดก็ตามที่ tik ทำมา
                
                
                </div>
      </div>
         
         
    
    
</div>
 <?php
$template->close();
?>